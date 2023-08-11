<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;

class DashboardController extends UserBaseController
{
    public function index()
    {
        return view('content.customer.customer-dashboard');
    }
}
