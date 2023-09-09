<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends UserBaseController
{
    public function sellerDashboard()
    {
        $this->totalBookingsCount = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->count();
        $this->totalBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->where('status', '!=', 0)->take(5)->get();
        $this->upComingBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->whereStatus(1)->count();
        $this->cancelBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->whereStatus(3)->count();

        $this->previousBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->whereStatus(4)->count();
        $this->acceptedBookingCount = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->whereStatus(2)->count();

        $this->UpcomingProgress = $this->totalBookingsCount ? ($this->upComingBookings / $this->totalBookingsCount) * 100 : 0;
        $this->CancelProgress = $this->totalBookingsCount ? ($this->cancelBookings / $this->totalBookingsCount) * 100 : 0;
        $this->PreviousProgress = $this->totalBookingsCount ? ($this->previousBookings / $this->totalBookingsCount) * 100 : 0;

        return view('content.seller.dashboard', $this->data);
    }
}
