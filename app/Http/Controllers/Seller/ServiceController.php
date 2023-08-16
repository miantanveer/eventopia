<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;

class ServiceController extends UserBaseController
{
    //
    public function serviceForm1(Request $request){
        dd($request);
        return $request;
    }
}
