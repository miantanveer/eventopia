<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Order;
use App\Models\Quote;

class BookingController extends UserBaseController
{
    public function pendingQuoteRequest()
    {
        $this->quotes = Quote::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            });
        })->whereIn('status', [0, 1])->get();
        $this->pendingBookings = null;

        return response()->json($this->data);
    }

    public function pendingBookings($type)
    {
        if ($type == 'space') {
            $this->orders = Order::whereType('space')->where(function ($query) {
                $query->whereHas('space', function ($serviceQuery) {
                    $serviceQuery->whereUserId(user_id());
                });
            })->get();
        } elseif ($type == 'entertainment') {
            $this->orders = Order::whereType('entertainment')->where(function ($query) {
                $query->whereHas('entertainment', function ($serviceQuery) {
                    $serviceQuery->whereUserId(user_id());
                });
            })->get();
        } elseif ($type == 'service') {
            $this->orders = Order::whereType('service')->where(function ($query) {
                $query->whereHas('service', function ($serviceQuery) {
                    $serviceQuery->whereUserId(user_id());
                });
            })->get();
        } elseif ($type == 'active') {
            $this->orders = Order::where(function ($query) {
                $query->whereHas('space', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                })
                    ->orWhereHas('entertainment', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    })
                    ->orWhereHas('service', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    });
            })->whereStatus(2)->get();
        } elseif ($type == 'cancel') {
            $this->orders = Order::where(function ($query) {
                $query->whereHas('space', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                })
                    ->orWhereHas('entertainment', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    })
                    ->orWhereHas('service', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    });
            })->whereStatus(3)->get();
        } elseif ($type == 'pending') {
            $this->orders = Order::where(function ($query) {
                $query->whereHas('space', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                })
                    ->orWhereHas('entertainment', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    })
                    ->orWhereHas('service', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    });
            })->whereStatus(0)->get();
        } else {
            $this->orders = Order::where(function ($query) {
                $query->whereHas('space', function ($subquery) {
                    $subquery->whereUserId(auth()->user()->id);
                })
                    ->orWhereHas('entertainment', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    })
                    ->orWhereHas('service', function ($subquery) {
                        $subquery->whereUserId(auth()->user()->id);
                    });
            })->get();

            $this->quotes = Quote::where(function ($query) {
                $query->whereHas('service', function ($serviceQuery) {
                    $serviceQuery->whereUserId(user_id());
                });
            })->get();
        }

        return response()->json($this->data, 200);
    }
}
