<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\Order;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Space;
use Illuminate\Http\Request;

class BookingController extends UserBaseController
{
    public function index($type)
    {
        if ($type == 'space') {
            $this->listing = Space::whereLastStep('10')->where('user_id', '!=', user_id())->whereStatus('1')->with('spaceHaveActivities', 'spaceImages')->inRandomOrder()->paginate(6);
            $this->count = $this->listing->count();
            $this->type = 'space';
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::whereLastSteps('step-9')->where('user_id', '!=', user_id())->whereStatus(1)->inRandomOrder()->paginate(6);
            $this->count = $this->listing->count();
            $this->type = 'entertainment';
        } elseif ($type == 'service') {
            $this->listing = Service::whereLastSteps('step-7')->where('user_id', '!=', user_id())->whereStatus(1)->with('serviceImages')->inRandomOrder()->paginate(6);
            $this->count = $this->listing->count();
            $this->type = 'service';
        }
        return response()->json($this->data, 200);

    }

    public function listingDetail($id, $type)
    {
        if ($type == 'space') {
            $this->listing = Space::with('spaceImages', 'operatingDays', 'operatingDays.operatingHours')->whereStatus(1)->find($id);
            $this->order = Order::whereStatus('1')->whereUserId(user_id())->whereSpaceId($this->listing->id)->first();
        } elseif ($type == 'service') {
            $this->listing = Service::with('serviceImages', 'operatingDays', 'operatingDays.operatingHours')->whereStatus(1)->find($id);
            $this->order = Quote::whereServiceId($this->listing->id)->first();
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::with('entertainmentImages', 'operatingDays', 'operatingDays.operatingHours')->whereStatus(1)->whereId($id)->first();
            $this->order = Order::whereStatus('1')->whereUserId(user_id())->whereEntertainmentId($this->listing->id)->first();
        }
        return response()->json($this->data, 200);
    }
   

    public function pending()
    {
        $this->pendingBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subquery) {
                $subquery->whereUserId(user_id());
            })
                ->orWhereHas('entertainment', function ($subquery) {
                    $subquery->whereUserId(user_id());
                })
                ->orWhereHas('service', function ($subquery) {
                    $subquery->whereUserId(user_id());
                });
        })->where('status', '!=', 0)->get();
        $this->quotes = Quote::where('status', '!=', 1)->get();
        return response()->json($this->data);
    }

    public function accept($id)
    {
        $order = Order::whereStatus(1)->find($id);
        if (!$order) {
            return response()->json('Order not found.');
        } else {
            $charge = $this->stripe->charges->create([
                'amount' => $order->amount * 100,
                'currency' => 'sar',
                'customer' => $order->user->customer_id,
                'source' => $order->stripe_card_id,
                'description' => user_name() . ' paid for ' . $order->type . '.',
            ]);

            $order->update(['status' => 2, 'stripe_txn_resp' => json_encode($charge)]);

            return response()->json('Booking request accepted successfully.', 200);
        }
    }

    public function details($id, $type)
    {
        $this->booking = Order::whereType($type)->find($id);
        $this->type = $type;
        return response()->json($this->data);
    }

    public function bookings($type)
    {
        if ($type == 'space') {
            $this->orders = Order::whereType('space')->whereUserId(user_id())->get();
        } elseif ($type == 'entertainment') {
            $this->orders = Order::whereType('entertainment')->whereUserId(user_id())->get();
        } elseif ($type == 'service') {
            $this->orders = Order::whereType('service')->whereUserId(user_id())->get();
        } elseif ($type == 'active') {
            $this->orders = Order::whereUserId(user_id())->whereStatus(2)->get();
        } elseif ($type == 'cancel') {
            $this->orders = Order::whereUserId(user_id())->whereStatus(3)->get();
        } else {
            $this->orders = Order::whereUserId(user_id())->get();
        }
        if (!$this->orders->isEmpty()) {
            return response()->json($this->data);
        } else {
            return response()->json('No Record found');
        }

    }

    public function refundPercentage($id, $type)
    {
        if ($type == 'service') {
            return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
        } elseif ($type == 'space') {
            $order = Order::find($id);
            $cancellation = $order->space->cancellation_policy_id;
            $currentDateTime = $order->date;
            $updatedAt = $order->updated_at;
            $hoursDifference = $updatedAt->diffInHours($currentDateTime);
            if ($order->status == 2) {
                if ($cancellation == 1) {
                    return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                } elseif ($cancellation == 2) {
                    if ($hoursDifference > 24 && $hoursDifference < 168) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => $order->amount / 2, 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                } elseif ($cancellation == 3) {
                    if ($hoursDifference > 168 && $hoursDifference < 720) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => $order->amount / 2, 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                } elseif ($cancellation == 4) {
                    if ($hoursDifference > 720 && $hoursDifference < 2160) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => $order->amount / 2, 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                }
            } elseif ($order->status == 1) {
                return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
            }
        } elseif ($type == 'entertainment') {
            $order = Order::find($id);
            $cancellation = $order->entertainment->cancellation_policy_id;
            $currentDateTime = $order->date;
            $updatedAt = $order->updated_at;
            $hoursDifference = $updatedAt->diffInHours($currentDateTime);
            if ($order->status == 2) {
                if ($cancellation == 1) {
                    return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                } elseif ($cancellation == 2) {
                    if ($hoursDifference > 24 && $hoursDifference < 168) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => round($order->amount / 2), 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                } elseif ($cancellation == 3) {
                    if ($hoursDifference > 168 && $hoursDifference < 720) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => round($order->amount / 2), 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                } elseif ($cancellation == 4) {
                    if ($hoursDifference > 720 && $hoursDifference < 2160) {
                        return response()->json(['amount_perc' => 50, 'deduct_amount' => round($order->amount / 2), 'id' => $id]);
                    } else {
                        return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
                    }
                }
            } elseif ($order->status == 1) {
                return response()->json(['amount_perc' => 0, 'deduct_amount' => 0, 'id' => $id]);
            }
        }
    }

    public function declineBookings($id)
    {
        if (Order::find($id)->update(['status' => 3])) {
            return response()->json(['status' => 'success', 'msg' => 'Booking request declined successfully.'], 200);
        }

    }

    public function cancelBooking(Request $req, $id)
    {
        $order = Order::find($id);
        $get_charge = json_decode($order->stripe_txn_resp);
        $amount = $get_charge->amount - ($req->deduct_amount * 100);
        try {
            $refund = $this->stripe->refunds->create([
                'charge' => $get_charge->id,
                'amount' => $amount,
            ]);

            $order->update(['status' => 3, 'is_refunded' => 1, 'refund_resp' => json_encode($refund)]);
            return response()->json('success', 200);

        } catch (ApiErrorException $e) {
            $errorMessage = $e->getMessage();
            return response()->json(['error', 'Refund failed' . $errorMessage], 400);
        }
    }
}
