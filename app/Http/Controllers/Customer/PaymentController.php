<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends UserBaseController
{
    public function loadReview()
    {
        $this->subtotal = Order::whereStatus(0)->sum('amount');
        $this->discount = Order::whereStatus(0)->sum('discount');
        return view('layouts.components.review', $this->data);
    }
    public function review(Request $req)
    {
        if ($req->subtotal == 0) {
            return redirect()->back()->with('error', 'Please select a listing first');
        }
        $typeArray = explode(', ', $req->type);
        foreach ($typeArray as $type) {
            $name = 'listing_id_' . $type;
            foreach ($req->$name as $listing) {
                $ids = explode(', ', $listing);
                $allIds = [];
                foreach ($ids as $idString) {
                    $individualIds = explode(',', $idString);
                    $allIds = array_merge($allIds, $individualIds);
                }
                foreach ($allIds as $id) {
                    $col = $type . '_id';
                    $exists = Order::where($col, $id)->whereStatus(0)->whereUserId(auth()->user()->id)->exists();
                    if ($exists) {
                        $carts = Cart::where($col, $id)->whereType($type)->get();
                        if ($carts) {
                            foreach ($carts as $cart) {
                                $cart->status = 1;
                                $cart->save();
                            }
                        }
                    } else {
                        $cart = Cart::where($col, $id)->whereType($type)->first();
                        $this->orderStore($id, $type, $cart->date, $cart->start_time, $cart->end_time, $req->subtotal, $req->discount);
                        $carts = Cart::where($col, $id)->whereType($type)->get();
                        if ($carts) {
                            foreach ($carts as $cart) {
                                $cart->status = 1;
                                $cart->save();
                            }
                        }
                    }
                }
            }
        }
        return redirect()->route('load-review');
    }
    public function successfull()
    {
        return view('layouts.components.payment-successfull');
    }
    public function store_payment(Request $req)
    {
        if ($req->amount == 0) {
            return redirect()->route('spaces')->with('error', 'Please select a space for booking first.');
        }
        try {
            $req->validate([
                'amount' => 'required',
                'card_holder_name' => 'required',
                'card_number' => 'required',
                'exp_month' => 'required',
                'exp_year' => 'required',
                'cvc' => 'required',
            ]);

            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $req->card_number,
                    'exp_month' => $req->exp_month,
                    'exp_year' => $req->exp_year,
                    'cvc' => $req->cvv,
                ],
            ]);

            $card =  $this->stripe->customers->createSource(
                auth()->user()->customer_id,
                ['source' => $token->id]
            )->toArray();

            $payment = new Payment();
            $payment->user_id = auth()->user()->id;
            $payment->card_id = $card['id'];
            $payment->card_holder_name = $req->card_holder_name;
            $payment->amount = $req->amount;
            $payment->save();

            $carts = Cart::whereStatus(1)->whereUserId(auth()->user()->id)->get();
            if ($carts) {
                foreach ($carts as $cart) {
                    $cart->delete();
                }
            }
            $orders = Order::whereUserId(auth()->user()->id)->whereStatus(0)->get();
            if ($orders) {
                foreach ($orders as $order) {
                    $order->status = 1;
                    $order->payment_id = $payment->id;
                    $order->save();
                }
            }
            return redirect()->route('payment-successfull')->with('success', 'Payment Successfull');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function orderStore($id, $col, $date, $start_time, $end_time = '', $amount, $discount)
    {
        $colum = $col . '_id';
        $order = new Order();
        $order->$colum = $id;
        $order->user_id = auth()->user()->id;
        $order->type = $col;
        $order->date = $date;
        $order->start_time = $start_time;
        $order->end_time = $end_time;
        $order->amount = $amount;
        $order->discount = $discount;
        $order->save();
    }

    // public function test()
    // {
    // $token = $this->stripe->tokens->create([
    //     'card' => [
    //         'number' => 4242424242424242,
    //         'exp_month' => 12,
    //         'exp_year' => 2025,
    //         'cvc' => 123,
    //     ],
    // ]);

    // $card = $this->stripe->customers->createSource(
    //     auth()->user()->customer_id,
    //     ['source' => $token->id]
    // )->toArray();

    // $pay = $this->stripe->charges->create([
    //     'amount' => 200 * 100,
    //     'currency' => 'usd',
    //     'customer' => auth()->user()->customer_id,
    //     'source' => $card['id'],
    //     'capture' => false,
    //     'description' => auth()->user()->first_name . ' ' . auth()->user()->last_name . ' pay amount',
    // ]);

    // $refund = $this->stripe->refunds->create([
    //     'charge' => 'ch_3Nl9WjHgu2WR3PQ119kt66eI',
    //     // Optionally, you can specify an amount to refund
    //     // 'amount' => 100 * 100,  // Amount in cents
    // ]);

    // dd($refund);

    // $caop = $this->stripe->charges->capture(
    //     $pay['id'],
    //     ['amount' => 20 * 100,],
    // );
    // }
}
