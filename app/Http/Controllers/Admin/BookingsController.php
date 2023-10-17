<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use App\Models\Order;
use App\Models\Service;
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
                $this->totalCompletedBookings = Order::whereType('space')->whereStatus('4')->count();
            } elseif ($type == 'entertainments') {
                $this->orders = Order::whereType('entertainment')->where(function ($query) {
                    $query->whereHas('entertainment');
                })->get();
                $this->totalBookings = Order::whereType('entertainment')->count();
                $this->totalReviewBookings = Order::whereType('entertainment')->whereStatus('1')->count();
                $this->totalAcceptedBookings = Order::whereType('entertainment')->whereStatus('2')->count();
                $this->totalCancelledBookings = Order::whereType('entertainment')->whereStatus('3')->count();
                $this->totalCompletedBookings = Order::whereType('entertainment')->whereStatus('4')->count();
            } elseif ($type == 'services') {
                $this->orders = Order::whereType('service')->where(function ($query) {
                    $query->whereHas('service');
                })->get();
                $this->totalBookings = Order::whereType('service')->count();
                $this->totalReviewBookings = Order::whereType('service')->whereStatus('1')->count();
                $this->totalAcceptedBookings = Order::whereType('service')->whereStatus('2')->count();
                $this->totalCancelledBookings = Order::whereType('service')->whereStatus('3')->count();
                $this->totalCompletedBookings = Order::whereType('service')->whereStatus('4')->count();
            }
            $this->type = $type;
            return view('content.admin.bookings.bookings', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function detailIndex($id, $type)
    {
        try {
            if ($type == 'space') {
                $this->space = Space::find($id);
            } elseif ($type == 'entertainment') {
                $this->entertainment = Entertainment::find($id);
            } elseif ($type == 'service') {
                $this->service = Service::find($id);
            }

            $this->type = $type;
            return view('content.seller.booking-details', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }

    public function updateStatus(Request $req)
    {
        try {
            $order = Order::find($req->id);

            if (!$order) {
                return response()->json(['message' => 'Booking not found', 'status' => 404]);
            }

            $data = ['status' => $req->status];
            if($req->status == "2")
            {
                $charge = $this->stripe->charges->create([
                    'amount' => $order->amount * 100,
                    'currency' => 'sar',
                    'customer' => $order->user->customer_id,
                    'source' => $order->stripe_card_id,
                    'description' => $order->user->first_name . ' ' . $order->user->last_name . ' paid for ' . $order->type . '.',
                ]);
                $data['stripe_txn_resp'] = json_encode($charge);
            }

            $order->update($data);

            // Assuming you're returning a JSON response, you can customize the response as needed.
            return response()->json(['message' => 'Status updated successfully', 'status' => 200]);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json(['message' => 'Error updating status', 'status' => 500]);
        }
    }
}
