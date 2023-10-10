<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\Order;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Space;
use Illuminate\Http\Request;
use Stripe\Exception\ApiErrorException;

class BookingController extends UserBaseController
{
    public function space_index()
    {
        $this->listing = Space::whereLastStep('10')->where('user_id', '!=', user_id())->whereStatus('1')->with('spaceHaveActivities', 'spaceImages')->inRandomOrder()->paginate(6);
        $this->count = $this->listing->count();
        $this->type = 'space';
        return view('content.customer.search-results', $this->data);
    }

    public function entertainment_index()
    {
        $this->listing = Entertainment::whereLastSteps('step-9')->whereStatus(1)->where('user_id', '!=', user_id())->inRandomOrder()->paginate(6);
        $this->count = $this->listing->count();
        $this->type = 'entertainment';
        return view('content.customer.search-results', $this->data);
    }

    public function service_index()
    {
        $this->listing = Service::whereLastSteps('step-7')->whereStatus(1)->where('user_id', '!=', user_id())->with('serviceImages')->inRandomOrder()->paginate(6);
        $this->count = $this->listing->count();
        $this->type = 'service';
        return view('content.customer.search-results', $this->data);
    }

    public function spaceDetail($id)
    {
        $this->space = Space::find($id);
        $this->order = Order::whereStatus('1')->whereUserId(user_id())->whereSpaceId($this->space->id)->first();
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
        $this->order = Order::whereStatus('1')->whereUserId(user_id())->whereEntertainmentId($this->ent->ent->id)->first();
        return view('content.customer.entertainment-detail', $this->data);
    }

    public function pendingBookings()
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
        })->where('status', 1)->get();
        $this->quotes = null;

        return view('content.seller.pending-bookings', $this->data);
    }

    public function pendingQuoteRequest()
    {
        $this->quotes = Quote::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            });
        })->whereIn('status', [0, 1])->get();
        $this->pendingBookings = null;

        return view('content.seller.pending-bookings', $this->data);
    }

    public function acceptBookings($id)
    {
        try {
            $order = Order::find($id);
            if (!$order) {
                return redirect()->back()->with('error', 'Order not found.');
            }

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
        if (Order::find($id)->update(['status' => 3])) {
            return redirect()->back()->with('success', 'Booking request declined successfully.');
        }
    }

    public function bookings($type, $for)
    {
        if ($type == 'space') {
            if ($for == 'customer') {
                $this->orders = Order::whereType('space')->whereUserId(user_id())->get();
            } else {
                $this->orders = Order::whereType('space')->where(function ($query) {
                    $query->whereHas('space', function ($serviceQuery) {
                        $serviceQuery->whereUserId(user_id());
                    });
                })->whereUserId(user_id())->paginate(2);
            }
        } elseif ($type == 'entertainment') {
            if ($for == 'customer') {
                $this->orders = Order::whereType('entertainment')->whereUserId(user_id())->get();
            } else {
                $this->orders = Order::whereType('entertainment')->where(function ($query) {
                    $query->whereHas('entertainment', function ($serviceQuery) {
                        $serviceQuery->whereUserId(user_id());
                    });
                })->whereUserId(user_id())->paginate(2);
            }
        } elseif ($type == 'service') {
            if ($for == 'customer') {
                $this->orders = Order::whereType('space')->whereUserId(user_id())->get();
            } else {
                $this->orders = Order::whereType('service')->where(function ($query) {
                    $query->whereHas('service', function ($serviceQuery) {
                        $serviceQuery->whereUserId(user_id());
                    });
                })->whereUserId(user_id())->paginate(2);
            }
        } elseif ($type == 'active') {
            if ($for == 'seller') {
                $this->orders = Order::whereUserId(user_id())->whereStatus('2')->get();
            } else {
                $this->orders = Order::where(function ($query) {
                    $query->whereHas('space', function ($subquery) {
                        $subquery->whereUserId(user_id());
                    })
                        ->orWhereHas('entertainment', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        })
                        ->orWhereHas('service', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        });
                })->whereStatus(2)->get();
            }
        } elseif ($type == 'cancel') {
            if ($for == 'customer') {
                $this->orders = Order::whereUserId(user_id())->whereStatus('3')->get();
            } else {
                $this->orders = Order::where(function ($query) {
                    $query->whereHas('space', function ($subquery) {
                        $subquery->whereUserId(user_id());
                    })
                        ->orWhereHas('entertainment', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        })
                        ->orWhereHas('service', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        });
                })->whereStatus('3')->get();
            }
        } elseif ($type == 'pending') {
            if ($for == 'customer') {
                $this->orders = Order::whereUserId(user_id())->whereStatus('0')->get();
            } else {
                $this->orders = Order::where(function ($query) {
                    $query->whereHas('space', function ($subquery) {
                        $subquery->whereUserId(user_id());
                    })
                        ->orWhereHas('entertainment', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        })
                        ->orWhereHas('service', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        });
                })->whereStatus('0')->get();
            }
        } else {
            if ($for == 'customer') {
                $this->orders = Order::whereUserId(user_id())->get();
                $this->quotes = Quote::whereUserId(user_id())->get();
            } else {
                $this->orders = Order::where(function ($query) {
                    $query->whereHas('space', function ($subquery) {
                        $subquery->whereUserId(user_id());
                    })
                        ->orWhereHas('entertainment', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        })
                        ->orWhereHas('service', function ($subquery) {
                            $subquery->whereUserId(user_id());
                        });
                })->get();
                $this->quotes = Quote::where(function ($query) {
                    $query->whereHas('service', function ($serviceQuery) {
                        $serviceQuery->whereUserId(user_id());
                    });
                })->get();
            }
        }
        if($for == 'customer'){
            return view('layouts.components.customer-booking', $this->data);
        }else{
            return view('layouts.components.bookings', $this->data);
        }
    }
    public function details($id, $type)
    {
        $this->booking = Order::whereType($type)->find($id);
        $this->type = $type;
        return view('content.seller.booking-details', $this->data);
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

    public function cancelBooking(Request $req, $id)
    {
        $order = Order::find($id);
        $get_charge = json_decode($order->stripe_txn_resp);
        if (isset($get_charge)) {
            $amount = $get_charge->amount - ($req->deduct_amount * 100);
            try {
                $refund = $this->stripe->refunds->create([
                    'charge' => $get_charge->id,
                    'amount' => $amount,
                ]);

                $order->update(['status' => 3, 'is_refunded' => 1, 'refund_resp' => json_encode($refund)]);
                return redirect()->back()->with('success', 'order cancelled successfully.');
            } catch (ApiErrorException $e) {
                $errorMessage = $e->getMessage();
                return redirect()->back()->with('error', 'Refund failed' . $errorMessage);
            }
        } else {
            $order->update(['status' => 3, 'is_refunded' => 1, 'refund_resp' => json_encode(['status' => 'Amount was not deduct previously so we just updated its status.'])]);
            return redirect()->back()->with('success', 'order cancelled successfully.');
        }
    }
}
