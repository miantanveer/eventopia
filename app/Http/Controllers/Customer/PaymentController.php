<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\BankAccount;
use App\Models\Cart;
use App\Models\Order;
use App\Models\CardDetails;
use App\Models\Country;
use Illuminate\Http\Request;

class PaymentController extends UserBaseController
{
    public function loadReview()
    {
        $this->subtotal = Order::whereUserId(user_id())->whereStatus(0)->sum('amount');
        $this->discount = Order::whereUserId(user_id())->whereStatus(0)->sum('discount');
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
                    $exists = Order::where($col, $id)->whereStatus(0)->whereUserId(user_id())->exists();
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
                        $exists = Order::where($col, $id)->whereStatus(1)->whereUserId(user_id())->exists();
                        if ($exists) {
                        } else {
                            $this->orderStore(
                                $id,
                                $type,
                                $cart->date,
                                $cart->start_time,
                                $cart->end_time,
                                ($type == 'space' ? @$cart->space->spaceHaveActivities[0]->rate_per_hour : ($type == 'service' ? @$cart->service->quote[0]->amount : @$cart->entertainment->entertainmentActivities[0]->hourly_rate)),
                                ($type == 'space' ? @$cart->space->spaceHaveActivities[0]->discount : ($type == 'service' ? '0' : @$cart->entertainment->entertainmentActivities[0]->discount))
                            );
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

            $carts = Cart::whereStatus(1)->whereUserId(user_id())->get();
            if ($carts) {
                foreach ($carts as $cart) {
                    $cart->delete();
                }
            }
            $orders = Order::whereUserId(user_id())->whereStatus(0)->get();
            if ($orders) {
                foreach ($orders as $order) {
                    $order->status = 1;
                    $order->stripe_card_id = $card['id'];
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
        $order->user_id = user_id();
        $order->type = $col;
        $order->date = $date;
        $order->start_time = $start_time;
        $order->end_time = $end_time;
        $order->amount = $amount;
        $order->discount = $discount;
        $order->save();
    }

    public function paymentMethod()
    {
        $this->countries = Country::get();
        $this->bankAccounts = BankAccount::whereUserId(user_id())->get();
        return view('content.seller.payments',$this->data);
    }

    public function addBankAccount(Request $req)
    {
        $data = $req->except('_token');
        $data['user_id'] = user_id();
        $result = BankAccount::create($data);

        if (!$result) {
            return redirect()->back()->with('error', 'Bank Acoount is not created.');
        }

        return redirect()->back()->with('success', 'Bank Acoount created successfully.');
    }

    public function deleteBankAccount($id)
    {
        $result = BankAccount::find($id)->delete();
        if (!$result) {
            return redirect()->back()->with('error', 'Bank Acoount is not Deleted.');
        }

        return redirect()->back()->with('success', 'Bank Acoount deleted successfully.');
    }

}
