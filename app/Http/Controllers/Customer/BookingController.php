<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\Order;
use App\Models\Service;
use App\Models\Space;
use App\Models\Quote;

class BookingController extends UserBaseController
{
    public function space_index()
    {
        $this->space = Space::whereLastStep('10')->where('user_id', '!=', auth()->user()->id)->whereStatus('1')->with('spaceHaveActivities', 'spaceImages')->get();
        $this->count = Space::whereStatus('1')->where('user_id', '!=', auth()->user()->id)->whereLastStep('10')->count();
        return view('content.customer.space', $this->data);
    }

    public function entertainment_index()
    {
        $this->ent = Entertainment::whereLastSteps('step-9')->where('user_id', '!=', auth()->user()->id)->get();
        $this->count = Entertainment::where('last_steps', 'step-9')->where('user_id', '!=', auth()->user()->id)->count();
        return view('content.customer.entertainments', $this->data);
    }

    public function service_index()
    {
        $this->service = Service::whereLastSteps('step-7')->where('user_id', '!=', auth()->user()->id)->with('serviceImages')->get();
        $this->count = Service::whereLastSteps('step-7')->where('user_id', '!=', auth()->user()->id)->count();
        return view('content.customer.services', $this->data);
    }

    public function spaceDetail($id)
    {
        $this->space = Space::find($id);
        $this->order = Order::whereStatus('1')->whereUserId(auth()->user()->id)->whereSpaceId($this->space->id)->first();
        return view('content.customer.space-detail', $this->data);
    }

    public function serviceDetail($id)
    {
        $this->service = Service::with('serviceImages')->find($id);
        $this->quote = Quote::whereServiceId($this->service->id)->first();
        return view('content.customer.service-detail', $this->data);
    }

    public function entertainmentDetail($id)
    {
        $this->ent = EntertainmentActivity::with('sub_act', 'entActivityAmenity.activity', 'sub_act.act', 'ent', 'ent.entertainmentImages', 'ent.operatingDays', 'ent.operatingDays.operatingHours')
            ->whereHas('ent', function ($ent_query) use ($id) {
                $ent_query->whereId($id);
            })->first();
        $this->order = Order::whereStatus('1')->whereUserId(auth()->user()->id)->whereEntertainmentId($this->ent->ent->id)->first();
        return view('content.customer.entertainment-detail', $this->data);
    }

    public function pendingBookings()
    {
        $this->pendingBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subquery) {
                $subquery->whereUserId(auth()->user()->id);
            })
            ->orWhereHas('entertainment', function ($subquery) {
                $subquery->whereUserId(auth()->user()->id);
            })
            ->orWhereHas('service', function ($subquery) {
                $subquery->whereUserId(auth()->user()->id);
            });
        })->where('status','!=',0)->get();
        $this->quotes = Quote::where('status','!=',1)->get();
        return view('content.seller.pending-bookings', $this->data);
    }

    public function acceptBookings($id)
    {
        try {
            $order = Order::find($id);
            if (!$order) return redirect()->back()->with('error', 'Order not found.');

            $charge = $this->stripe->charges->create([
                'amount' => $order->amount * 100,
                'currency' => 'sar',
                'customer' => $order->user->customer_id,
                'source' => $order->stripe_card_id,
                'description' => $order->user->first_name . ' ' . $order->user->last_name . ' paid for ' . $order->type . '.',
            ]);

            $order->update(['status' => 2, 'stripe_txn_resp' => json_encode($charge)]);

            return redirect()->back()->with('success', 'Booking request accepted successfully.');
        } catch (\Stripe\Exception\CardException $e) {
            $error = $e->getMessage();
        }

        if (isset($error)) {
            return redirect()->back()->with('error', $error);
        }
    }

    public function declineBookings($id)
    {
        if (Order::find($id)->update(['status' => 3])) return redirect()->back()->with('success', 'Booking request declined successfully.');
    }

    public function bookings($type = null)
    {
        if ($type == 'space') {
            $this->orders = Order::whereType('space')->whereUserId(auth()->user()->id)->paginate(2);
        }elseif ($type == 'entertainment') {
            $this->orders = Order::whereType('entertainment')->whereUserId(auth()->user()->id)->paginate(2);
        }elseif ($type == 'service') {
            $this->orders = Order::whereType('service')->whereUserId(auth()->user()->id)->paginate(2);
        }elseif ($type == 'active') {
            $this->orders = Order::whereUserId(auth()->user()->id)->whereStatus(2)->paginate(2);
        }elseif ($type == 'cancel') {
            $this->orders = Order::whereUserId(auth()->user()->id)->whereStatus(3)->paginate(2);
        }else {
            $this->orders = Order::whereUserId(auth()->user()->id)->paginate(2);
        }

        if(!$this->orders->isEmpty())
        {
            return view('layouts.components.bookings',$this->data);
        }

        return view('layouts.components.booking');
    }
}
