<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Validator;

class OrderController extends UserBaseController
{
    public function review(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'subtotal' => 'required',
            'discount' => 'required',
            'listing_id_service' => 'required',
            'listing_id_space' => 'required',
            'discount' => 'required',
            'listing_id_entertainment' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }  
        if ($req->subtotal == '0') {
            return response()->json('error',400);
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
                            orderStore(
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
        return response()->json('success',200);
    }
}
