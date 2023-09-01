<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\Service;

class QuoteController extends UserBaseController
{
    public function send_quote(Request $req,$id)
    {
        $exists = Quote::whereServiceId($id)->whereUserId(user_id())->whereStatus(0)->exists();
        $service = Service::find($id);
        if($exists){
            return redirect()->back()->with('error','Already Requested');
        }
        $quote = new Quote();
        $quote->service_id = $id;
        $quote->user_id = user_id();
        $quote->date = $req->date;
        $quote->flexible_date = $req->flexible_date;
        $quote->guests = $req->guests;
        $quote->description = $req->description;
        $quote->save();
        notification('Service','New Quote Received',$service->user_id,false);
        return redirect()->back()->with('success','Quote requested Successfully');
    }
    public function receive_quote($id)
    {
        $this->quote = Quote::find($id);
        return view('content.seller.create-quote',$this->data);
    }
    public function send_seller_quote(Request $req,$id)
    {
        $req->validate([
            'guests'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'description'=>'required',
        ]);
        $quote = Quote::find($id);
        $quote->guests = $req->guests;
        $quote->date = $req->date;
        $quote->amount = $req->amount;
        $quote->description = $req->description;
        $quote->status = 2;
        $quote->save();
        return redirect()->route('pending-bookings')->with('success','Quote Send Successfully.');
    }
    public function decline_quote($id)
    {
        $quote = Quote::find($id);
        $quote->status = 3;
        $quote->save();
        return redirect()->back()->with('success','Quote Declined Successfully.');
    }
}
