<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends UserBaseController
{
    public function sellerDashboard()
    {
        $this->totalBookingsCount = Order::whereUserId(user_id())->count();
        $this->totalBookings = Order::whereIn('status', [1, 2, 3])->take(5)->get();

        $this->upComingBookings = Order::whereUserId(user_id())->whereStatus(1)->count();
        $this->cancelBookings = Order::whereUserId(user_id())->whereStatus(3)->count();
        $this->previousBookings = Order::whereUserId(user_id())->whereStatus(4)->count();

        $this->UpcomingProgress = $this->totalBookingsCount ? ($this->upComingSpaceBookings / $this->totalBookingsCount) * 100 : 0 ;
        $this->CancelProgress = $this->totalBookingsCount ? ($this->cancelSpaceBookings / $this->totalBookingsCount) * 100 : 0 ;
        $this->PreviousProgress = $this->totalBookingsCount ? ($this->previousSpaceBookings / $this->totalBookingsCount) * 100 : 0 ;

        $this->acceptedBookingCount = Order::whereUserId(user_id())->whereStatus(2)->count();

        return view('content.seller.dashboard',$this->data);
    }
}
