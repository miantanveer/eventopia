<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;

class PaymentController extends UserBaseController
{
    public function review(Request $req)
    {
        $this->subtotal = $req->subtotal;
        $this->admin_fees = $req->admin_fees;
        $this->discount = $req->discount;
         return view('layouts.components.review',$this->data);
    }
}
