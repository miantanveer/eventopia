<?php
use App\Events\NotificationEvent;
use App\Models\Notification;

if (!function_exists('notification')) {
    function notification($name, $description, $id, $bool)
    {
        $notification = new Notification();
        $notification->name = $name;
        $notification->description = $description;
        $notification->user_id = $id;
        $notification->save();
        // event(new NotificationEvent(['id'=>$id,'message'=>$bool]));
// Create the event instance
        if (is_int($id)) {
            // Pass both required arguments to the event constructor
            $event = new NotificationEvent(['id'=>$id,'message'=>$bool]);

            // Specify the broadcast channel
            $event->broadcastOn("user.$id");

            // Dispatch the event
            event($event);
        }
        return $notification;
    }
}
if (!function_exists('user_id')) {
    function user_id()
    {
        return auth()->user()->id;
    }
}
