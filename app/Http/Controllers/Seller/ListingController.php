<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\Service;

class ListingController extends UserBaseController
{
    public function index()
    {
        $this->service = Service::whereUserId(auth()->user()->id)->whereLastSteps('step-7')->with('serviceImages')->paginate(2);
        $this->service_remaining = Service::whereUserId(auth()->user()->id)->where('last_steps','!=', 'step-7')->get();
        $this->entertainment_remaining = Entertainment::whereUserId(auth()->user()->id)->where('last_steps','!=', 'step-8')->get();
        $this->entertainment = Entertainment::whereUserId(auth()->user()->id)->whereLastSteps('step-8')->with('entertainmentImages','entertainmentActivities')->paginate(2);
        return view('content.seller.my-listing', $this->data);
    }
}
