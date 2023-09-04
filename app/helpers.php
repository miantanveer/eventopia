<?php
use App\Events\NotificationEvent;
use App\Models\Notification;

if (!function_exists('notification')) {
    function notification($name, $description, $user_id,$type,$quote_id)
    {
        $notification = new Notification();
        $notification->name = $name;
        $notification->description = $description;
        $notification->user_id = $user_id;
        $notification->type = $type;
        $notification->quote_id = $quote_id;
        $notification->save();
        return $notification;
    }
}
if (!function_exists('user_id')) {
    function user_id()
    {
        return auth()->user()->id;
    }
}
