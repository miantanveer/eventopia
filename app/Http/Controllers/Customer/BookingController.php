<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\Order;
use App\Models\Service;
use App\Models\Space;

class BookingController extends UserBaseController
{
    public function spaceDetail($id)
    {
        $this->space = Space::find($id);
        return view('content.customer.space-detail', $this->data);
    }

    public function serviceDetail($id)
    {
        $this->service = Service::with('serviceImages')->find($id);
        return view('content.customer.service-detail', $this->data);
    }

    public function entertainmentDetail($id)
    {
        $this->ent = EntertainmentActivity::with('sub_act', 'entActivityAmenity.activity', 'sub_act.act', 'ent', 'ent.entertainmentImages','ent.operatingDays','ent.operatingDays.operatingHours')
        ->whereHas('ent', function ($ent_query) use ($id) {
            $ent_query->whereId($id);

        })->first();
        return view('content.customer.entertainment-detail', $this->data);
    }

    public function space_index()
    {
        $this->space = Space::whereLastStep('10')->whereStatus('1')->with('spaceHaveActivities', 'spaceImages')->get();
        $this->count = Space::whereStatus('1')->whereLastStep('10')->count();
        return view('content.customer.space', $this->data);
    }

    public function entertainment_index()
    {
        $this->ent = EntertainmentActivity::with('sub_act', 'sub_act.act', 'ent', 'ent.entertainmentImages')
            ->whereHas('ent', function ($ent_query) {
                $ent_query->whereLastSteps('step-9');
            })->get();
        $this->count = Entertainment::where('last_steps', 'step-9')->count();
        return view('content.customer.entertainments', $this->data);
    }

    public function service_index()
    {
        $this->service = Service::whereLastSteps('step-7')->with('serviceImages')->get();
        $this->count = Service::whereLastSteps('step-7')->count();
        return view('content.customer.services', $this->data);
    }

    public function pendingBookings()
    {
        $this->pendingBookings = Order::whereStatus('1')->get();
        return view('content.seller.pending-bookings',$this->data);
    }

    public function acceptBookings($id)
    {
        dd($id);
        // $this->pendingBookings = Order::whereStatus('1')->get();
        // return view('content.seller.pending-bookings',$this->data);
    }
}
