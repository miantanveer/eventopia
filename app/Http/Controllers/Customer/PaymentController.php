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
}
