<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Space;
use Illuminate\Http\Request;

class BookingsController extends AdminBaseController
{
    public function index($type)
    {
        try {
            if ($type == 'spaces') {
                $this->orders = Order::whereType('space')->where(function ($query) {
                    $query->whereHas('space');
                })->get();
                $this->totalBookings = Order::whereType('space')->count();
                $this->totalReviewBookings = Order::whereType('space')->whereStatus('1')->count();
                $this->totalAcceptedBookings = Order::whereType('space')->whereStatus('2')->count();
                $this->totalCancelledBookings = Order::whereType('space')->whereStatus('3')->count();
            } elseif ($type == 'entertainments') {
                $this->orders = Order::whereType('entertainment')->where(function ($query) {
                    $query->whereHas('entertainment');
                })->get();
                $this->totalBookings = Order::whereType('entertainment')->count();
                $this->totalReviewBookings = Order::whereType('entertainment')->whereStatus('1')->count();
                $this->totalAcceptedBookings = Order::whereType('entertainment')->whereStatus('2')->count();
                $this->totalCancelledBookings = Order::whereType('entertainment')->whereStatus('3')->count();
            } elseif ($type == 'services') {
                $this->orders = Order::whereType('service')->where(function ($query) {
                    $query->whereHas('service');
                })->get();
                $this->totalBookings = Order::whereType('service')->count();
                $this->totalReviewBookings = Order::whereType('service')->whereStatus('1')->count();
                $this->totalAcceptedBookings = Order::whereType('service')->whereStatus('2')->count();
                $this->totalCancelledBookings = Order::whereType('service')->whereStatus('3')->count();
            }
            $this->type = $type;
            return view('content.admin.bookings.bookings', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }

    }

    public function detailIndex()
    {

    }

    public function updateStatus()
    {

    }

    public function deleteListing()
    {

    }
}
