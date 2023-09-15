<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use Validator;
use App\Models\Quote;
use App\Models\Service;
use App\Events\NotificationEvent;

class QuoteController extends UserBaseController
{
    public function send_quote(Request $req,$id)
    {
        $validator = Validator::make($req->all(), [
            'date'=>'required',
            'guests'=>'required',
            'description'=>'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
       
        $exists = Quote::whereServiceId($id)->whereUserId(user_id())->whereStatus(0)->exists();
        $service = Service::find($id);
        if($exists){
            return response()->json('Already Requested');
        }
        $quote = new Quote();
        $quote->service_id = $id;
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
        return response()->json('Quote requested Successfully',200);
    }
    public function receive_quote($id)
    {
        $this->quote = Quote::find($id);
        return response()->json($this->data);
    }

    public function load_quote($id)
    {
        $quote = Quote::with('service','service.serviceImages')->find($id);
        return response()->json($quote,200);
    }
}
