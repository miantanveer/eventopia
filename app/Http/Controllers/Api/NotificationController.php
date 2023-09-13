<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\UserBaseController;
use App\Models\Notification;

class NotificationController extends UserBaseController
{
    public function index()
    {
        $this->notifies = Notification::where(function ($query) {
            $query->whereUserId(user_id());
            $query->orWhereHas('quote', function ($query) {
                $query->where('status', 2)->whereUserId(user_id());
            });
        })->whereIsRead(0)->get();
        return response()->json($this->data);
    }
}
