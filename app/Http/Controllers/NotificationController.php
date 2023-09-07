<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserBaseController;
use App\Models\Notification;

class NotificationController extends UserBaseController
{
    public function index()
    {
        $this->notifies = Notification::whereHas('quote', function ($query) {
            $query->where('status', 2)->whereUserId(user_id());
        })->whereIsRead(0)->get();
        return view('layouts.components.notify-list',$this->data);
    }
    public function read()
    {
        $notifies = Notification::whereHas('quote', function ($query) {
            $query->where('status', 1)->whereUserId(user_id());
        })->whereIsRead(0)->get();
        $results = '';
        foreach($notifies as $notify){
            $notify->is_read = 1;
            $results = $notify->save();
        }
        if($results){
            return redirect()->back()->with('success','All notifications are marked as read Successfully.');
        }
        else{
            return redirect()->back()->with('error','Something went wrong.');
        }
    }
}
