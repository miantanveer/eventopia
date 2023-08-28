<?php
use App\Models\Notification;

if (!function_exists('notification')) {
    function notification($name, $description, $id)
    {
        $notification = new Notification();
        $notification->name = $name;
        $notification->description = $description;
        $notification->user_id = $id;
        $notification->save();
        return $notification;
    }
}
