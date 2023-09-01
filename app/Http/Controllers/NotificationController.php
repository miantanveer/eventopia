<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\NotificationEvent;

class NotificationController extends UserBaseController
{
    public function index()
    {
        event(new NotificationEvent('hello world'));
    }
}
