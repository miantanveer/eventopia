<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends AdminBaseController
{
    // Dashboard
    public function dashboard()
    {
        return view('content.admin.dashboard.index');
    }
}
