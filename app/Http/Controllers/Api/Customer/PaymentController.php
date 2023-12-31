<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cart;
use App\Models\Order;

class PaymentController extends UserBaseController
{
    public function store(Request $req)
    {
        if ($req->amount == 0) {
            return response()->json('Please select a listsing first', 400);
        }
        $validator = Validator::make($req->all(), [
            'amount' => 'required',
            'card_holder_name' => 'required',
            'card_number' => 'required',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'cvc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $token = $this->stripe->tokens->create([
            'card' => [
                'number' => $req->card_number,
                'exp_month' => $req->exp_month,
                'exp_year' => $req->exp_year,
                'cvc' => $req->cvv,
            ],
        ]);

        $card = $this->stripe->customers->createSource(
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
        return response()->json('payment-successfull');

    }
}
