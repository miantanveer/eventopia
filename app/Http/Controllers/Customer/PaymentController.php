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
        if($req->subtotal == 0){
            return redirect()->back()->with('error','Please select a listing first');
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
        $req->validate([
            'amount' => 'required',
            'card_holder_name' => 'required',
            'card_num' => 'required',
            'expiration' => 'required',
            'cvc' => 'required',
        ]);
        try {
            $payment = new Payment();
            $payment->amount = $req->amount;
            $payment->user_id = auth()->user()->id;
            $payment->card_holder_name = $req->card_holder_name;
            $payment->card_num = $req->card_num;
            $payment->expiration = $req->expiration;
            $payment->cvc = $req->cvc;
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
}
