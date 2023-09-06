<?php
use App\Events\NotificationEvent;
use App\Models\Notification;
use App\Models\Cart;

if (!function_exists('notification')) {
    function notification($name, $description, $user_id,$type = null,$quote_id = null)
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
if (!function_exists('cartStore')) {
    function cartStore($id,$col,$date,$start_time,$end_time)
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
