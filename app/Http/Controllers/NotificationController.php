<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends UserBaseController
{
    public function index()
    {
        $notify = Notification::get();
        return $notify->map(function($notif) {
            return [
                'id'=>$notif->id,
                'name'=>$notif->name,
                'description'=>$notif->description,
                'is_read'=>$notif->is_read,
                'link'=>$notif->link,
                'type'=>$notif->type,
                'user_id'=>$notif->user_id,
                'quote_id'=>$notif->quote_id,
                'created_at'=>$notif->created_at->diffForHumans(),
            ];
        }); 
    }
}
