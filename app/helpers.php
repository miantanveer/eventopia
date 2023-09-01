<?php
use App\Models\Notification;
use App\Events\NotificationEvent;

if (!function_exists('notification')) {
    function notification($name, $description, $id,$bool)
    {
        $notification = new Notification();
        $notification->name = $name;
        $notification->description = $description;
        $notification->user_id = $id;
        $notification->save();
        event(new NotificationEvent(['from'=>$id,'message'=>$bool]));
        return $notification;
    }
}
if (!function_exists('user_id')) {
    function user_id()
    {
        return auth()->user()->id;
    }
}
 