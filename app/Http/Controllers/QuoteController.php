<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Events\NotificationEvent;
use App\Models\Quote;
use App\Models\Cart;
use App\Models\Service;

class QuoteController extends UserBaseController
{
    public function send_quote(Request $req,$id)
    {
        $req->validate([
            'date'=>'required',
            'guests'=>'required',
            'description'=>'required'
        ]);
        $exists = Quote::whereServiceId($id)->whereUserId(user_id())->whereStatus(0)->exists();
        $service = Service::find($id);
        if($exists){
            return redirect()->back()->with('error','Already Requested');
        }
        $quote = new Quote();
        $quote->service_id = $service->id;
        $quote->user_id = user_id();
        $quote->date = $req->date;
        $quote->flexible_date = $req->flexible_date;
        $quote->guests = $req->guests;
        $quote->description = $req->description;
        $quote->save();
        notification('Service','New Quote Received',$service->user_id,'service',$quote->id);
        if (is_int($service->user_id)) {
            $event = new NotificationEvent(['id'=>$service->user_id,'message'=>false]);
            $event->broadcastOn("user.$service->user_id");
            event($event);
        }
        return redirect()->back()->with('success','Quote requested Successfully');
    }

    public function revise_quote(Request $req,$id)
    {
        $req->validate([
            'date'=>'required',
            'guests'=>'required',
            'description'=>'required'
        ]);
        $exists = Quote::whereStatus(0)->find($id);
        if($exists){
            return redirect()->back()->with('error','Already Requested');
        }
        $quote = Quote::find($id)->first();
        $service = Service::find($quote->service_id);
        $quote->date = $req->date;
        $quote->flexible_date = $req->flexible_date;
        $quote->guests = $req->guests;
        $quote->description = $req->description;
        $quote->status = 0;
        $quote->save();
        if (is_int($service->user_id)) {
            $event = new NotificationEvent(['id'=>$service->user_id,'message'=>false]);
            $event->broadcastOn("user.$service->user_id");
            event($event);
        }
        return redirect()->back()->with('success','Quote requested Successfully');
    }

    public function receive_quote($id)
    {
        $this->quote = Quote::find($id);
        return view('content.seller.create-quote',$this->data);
    }

    public function load_accept_quote($id)
    {
        $quote = Quote::with('service','service.serviceImages')->whereId($id)->first();
        return response()->json($quote,200);
    }

    public function accept_quote($id)
    {
        $quote = Quote::find($id);
        $quote->status = 2;
        $quote->save();
        $exists = Cart::whereServiceId($quote->service_id)->whereUserId(user_id())->exists();
        if($exists){

            return redirect()->route('checkout');
        }
        else{
            cartStore($quote->service_id,'service',$quote->date,'null','null');
            return redirect()->route('checkout');
        }
    }

    public function send_seller_quote(Request $req,$id)
    {
        $req->validate([
            'guests'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'description'=>'required',
            'seller_quote_description'=>'required',
        ]);
        $quote = Quote::find($id);
        $quote->guests = $req->guests;
        $quote->date = $req->date;
        $quote->amount = $req->amount;
        $quote->description = $req->description;
        $quote->seller_quote_description = $req->seller_quote_description;
        $quote->status = 1;
        $quote->save();

        if (is_int($quote->user_id)) {
            $event = new NotificationEvent(['id'=>$quote->user_id,'message'=>true,'data_id'=>$quote->id]);
            $event->broadcastOn("user.$quote->user_id");
            event($event);
        }
        return redirect()->route('pending-quote-requests')->with('success','Quote Send Successfully.');
    }

    public function seller_decline_quote($id)
    {
        $quote = Quote::find($id);
        $quote->status = 3;
        $quote->save();
        if (is_int($quote->user_id)) {
            $event = new NotificationEvent(['id'=>$quote->user_id,'message'=>false,'error'=>'Rejected']);
            $event->broadcastOn("user.$quote->user_id");
            event($event);
        }
        return redirect()->back()->with('success','Quote Declined Successfully.');
    }
    public function decline_quote($id)
    {
        $quote = Quote::find($id);
        $quote->status = 3;
        $quote->save();
        if (is_int($quote->user_id)) {
            $event = new NotificationEvent(['id'=>$quote->service->user_id,'message'=>false,'error'=>'Rejected']);
            $event->broadcastOn("user.$quote->user_id");
            event($event);
        }
        return redirect()->back()->with('success','Quote Declined Successfully.');
    }
}
