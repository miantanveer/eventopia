<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends UserBaseController
{
    public function review(Request $req)
    {
        $this->subtotal = $req->subtotal;
        $this->admin_fees = $req->admin_fees;
        $this->discount = $req->discount;
         return view('layouts.components.review',$this->data);
    }
    public function successfull()
    {
        return view('layouts.components.payment-successfull');
    }
    public function store_payment(Request $req)
    {
        $req->validate([
            'amount'=>'required',
            'card_holder_name'=>'required',
            'card_num'=>'required',
            'expiration'=>'required',
            'cvc'=>'required',
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
            return redirect()->route('payment-successfull')->with('success','Payment Successfull');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

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
