<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Order;
use App\Models\Quote;

class BookingController extends UserBaseController
{
    public function pending()
    {
        $this->pendingBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subquery) {
                $subquery->whereUserId(auth()->user()->id);
            })
                ->orWhereHas('entertainment', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                })
                ->orWhereHas('service', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                });
        })->where('status', '!=', 0)->get();
        $this->quotes = Quote::where('status', '!=', 1)->get();
        return response()->json($this->data);
    }

    public function accept($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json('Order not found.');
        }

        $charge = $this->stripe->charges->create([
            'amount' => $order->amount * 100,
            'currency' => 'sar',
            'customer' => $order->user->customer_id,
            'source' => $order->stripe_card_id,
            'description' => user_name() . ' paid for ' . $order->type . '.',
        ]);

        $order->update(['status' => 2, 'stripe_txn_resp' => json_encode($charge)]);

        return response()->json('Booking request accepted successfully.', 200);

    }
}
