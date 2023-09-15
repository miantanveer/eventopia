<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cart;

class CartController extends UserBaseController
{
    public function checkout(Request $req,$id,$type)
    {
        $validator = Validator::make($req->all(), [
            'startTime' => 'required',
            'endTime' => 'required',
            'date' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }        
        if ($type == 'entertainment') {
            $exists = Cart::whereEntertainmentId($id)->whereUserId(auth()->user()->id)->exists();
            if ($exists) {
                return response()->json('Item already exists');
            } else {
                cartStore($id, $type, $req->date, $req->startTime, $req->endTime);
                return response()->json('success');
            }
        } elseif ($type == 'space') {
            $exists = Cart::whereSpaceId($id)->whereUserId(auth()->user()->id)->exists();
            if ($exists) {
                return response()->json('Item already exists');
            } else {
                cartStore($id, $type, $req->date, $req->startTime, $req->endTime);
                return response()->json('success');
            }
        }
    }
}
