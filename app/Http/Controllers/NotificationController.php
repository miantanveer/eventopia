<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationEvent;

class NotificationController extends UserBaseController
{
    public function index()
    {
        event(new NotificationEvent('hello world'));
    }
}
