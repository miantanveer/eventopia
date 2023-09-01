<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Space;
use App\Models\Entertainment;

class CartController extends UserBaseController
{
    public function checkout()
    {
        $this->spaces = Space::get();
        $this->ents = Entertainment::get();
        $this->user = User::whereId(auth()->user()->id)->with('cart')->first();
        return view('layouts.components.checkout-page',$this->data);
    }
    public function store(Request $req,$id,$type)
    {
        if($type == 'entertainment'){
            $exists = Cart::whereEntertainmentId($id)->whereUserId(auth()->user()->id)->exists();
            if($exists){
                return redirect()->route('checkout');
            }
            else{
                $this->cartStore($id,$type,$req->date,$req->start_time,$req->end_time);
                return redirect()->route('checkout');
            }
        }
        elseif($type == 'space'){
            $exists = Cart::whereSpaceId($id)->whereUserId(auth()->user()->id)->exists();
            if($exists){
                return redirect()->route('checkout');
            }
            else{
                $this->cartStore($id,$type,$req->date,$req->start_time,$req->end_time);
                return redirect()->route('checkout');
            }
        }
    }
    public function stores($id,$type)
    {
        if($type == 'entertainment'){
            $exists = Cart::whereEntertainmentId($id)->whereUserId(auth()->user()->id)->exists();
            if($exists){
                return redirect()->back()->with('error','Item Already Exists in your Cart');
            }
            else{
                $this->cartStore($id,$type);
                return redirect()->back()->with('success','Item Added to Cart successfully');
            }
        }
        // elseif($type == 'service'){
        //     $exists = Cart::whereServiceId($id)->whereUserId(auth()->user()->id)->exists();
        //     if($exists){
        //         return redirect()->back()->with('error','Item Already Exists in your Cart');
        //     }
        //     else{
        //         $this->cartStore($id,$type);
        //         return redirect()->back()->with('success','Item Added to Cart successfully');
        //     }
        // }
        elseif($type == 'space'){
            $exists = Cart::whereSpaceId($id)->whereUserId(auth()->user()->id)->exists();
            if($exists){
                return redirect()->back()->with('error','Item Already Exists in your Cart');
            }
            else{
                $this->cartStore($id,$type);
                return redirect()->back()->with('success','Item Added to Cart successfully');
            }
        }
    }
    public function destroy($id,$type)
    {
        $cart = Cart::whereUserId(auth()->user()->id)->whereType($type)->find($id);
        $cart->delete();
        return redirect()->back()->with('success','Item Deleted Successfully');
    }
    public function cartStore($id,$col,$date,$start_time,$end_time)
    {
        $colum = $col.'_id';
        $cart = new Cart();
        $cart->$colum = $id;
        $cart->user_id = auth()->user()->id;
        $cart->type = $col;
        $cart->date = $date;
        $cart->start_time = $start_time;
        $cart->end_time = $end_time;
        $cart->save();
    }
   
}