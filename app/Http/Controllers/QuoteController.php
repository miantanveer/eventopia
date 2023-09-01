<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends UserBaseController
{
    public function send_quote(Request $req,$id)
    {
        $exists = Quote::whereServiceId($id)->whereUserId(user_id())->whereStatus(0)->exists();
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
        notification('Service','New Quote Received',user_id(),false);
        return redirect()->back()->with('success','Quote requested Successfully');
    }
}
