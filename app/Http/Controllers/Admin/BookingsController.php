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
        // try {
            if (in_array($type, ['spaces', 'entertainments', 'services'])) {
                $typeMapping = [
                    'spaces' => 'space',
                    'entertainments' => 'entertainment',
                    'services' => 'service',
                ];

                $this->orders = Order::where('type', $typeMapping[$type])
                    ->when($type == 'spaces', function ($query) {
                        $query->whereHas('space', function ($q) {
                            $q->whereIn('status', [1, 2, 3]);
                        });
                    })
                    ->when($type == 'entertainment', function ($query) {
                        $query->whereHas('entertainment', function ($q) {
                            $q->whereIn('status', [1, 2, 3]);
                        });
                    })
                    ->when($type == 'service', function ($query) {
                        $query->whereHas('service', function ($q) {
                            $q->whereIn('status', [1, 2, 3]);
                        });
                    });

                $this->totalBookings = $this->orders->count();
                $this->totalReviewBookings = $this->orders->whereStatus(1)->count();
                $this->totalAcceptedBookings = $this->orders->whereStatus(2)->count();
                $this->totalCancelledBookings = $this->orders->whereStatus(3)->count();

                $this->type = $type;
            }

            return view('content.admin.bookings.bookings', $this->data);

        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        // }

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
