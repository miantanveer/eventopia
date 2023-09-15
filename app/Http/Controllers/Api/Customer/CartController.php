<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cart;
use App\Models\Space;
use App\Models\Entertainment;
use App\Models\Service;
use App\Models\User;

class CartController extends UserBaseController
{
    public function checkoutData()
    {
        $this->spaces = Space::get();
        $this->ents = Entertainment::get();
        $this->service = Service::get();
        $this->user = User::whereId(auth()->user()->id)->with('cart')->first();
        return response()->json($this->data,200);
    }
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

    public function destroy($id, $type)
    {
        $cart = Cart::whereUserId(auth()->user()->id)->whereType($type)->find($id);
        $cart->delete();
        if($cart){
            return response()->json('success',200);
        }
        else{
            return response()->json('error',400);
        }
    }
}
