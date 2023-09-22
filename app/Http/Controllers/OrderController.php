<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Quote;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

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

        $this->activeBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            })->orWhereHas('space', function ($spaceQuery) {
                $spaceQuery->whereUserId(user_id());
            })->orWhereHas('entertainment', function ($entertainmentQuery) {
                $entertainmentQuery->whereUserId(user_id());
            });
        })->whereStatus(2)->count();

        $this->pendingBookings = Order::where(function ($query) {
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

        $this->pendingQuoteRequests = Quote::where(function ($query) {
            $query->whereHas('service', function ($serviceQuery) {
                $serviceQuery->whereUserId(user_id());
            });
        })->whereIn('status', [0, 1])->count();

        $this->activeBookingProgress = $this->totalBookingsCount ? ($this->activeBookings / $this->totalBookingsCount) * 100 : 0;
        $this->pendingProgress = $this->totalBookingsCount ? ($this->pendingBookings / $this->totalBookingsCount) * 100 : 0;
        $this->CancelProgress = $this->totalBookingsCount ? ($this->cancelBookings / $this->totalBookingsCount) * 100 : 0;
        $this->PreviousProgress = $this->totalBookingsCount ? ($this->previousBookings / $this->totalBookingsCount) * 100 : 0;

        return view('content.seller.dashboard', $this->data);
    }


    // public function test()
    // {
    //     try {
    //         $date = Carbon::parse(now())->toDateString();
    //         $time = Carbon::parse(now())->format('g A');
    //         $SpaceEntorders = Order::whereStatus('2')->where('type', '!=', 'service')->where('date', $date)->where('start_time', $time)->get();
    //         $Serivceorders = Order::whereStatus('2')->where('type', 'service')->where('date', $date)->get();
    //         foreach ($SpaceEntorders as $SpaceEntorder) {
    //             $SpaceEntorder->update(['status' => '5']);
    //         }
    //         foreach ($Serivceorders as $Serivceorder) {
    //             $Serivceorder->update(['status' => '5']);
    //         }

    //         $ActiveSpaceEntorders = Order::whereStatus('5')->where('type', '!=', 'service')->where('date', '>=', $date)->orWhere('end_time', $time)->get();
    //         $ActiveSerivceorders = Order::whereStatus('5')->where('type', 'service')->where('date', '>=', $date)->get();

    //         foreach ($ActiveSpaceEntorders as $ActiveSpaceEntorder) {
    //             $ActiveSpaceEntorder->update(['status' => '4']);
    //         }

    //         foreach ($ActiveSerivceorders as $ActiveSerivceorder) {
    //             $ActiveSerivceorder->update(['status' => '4']);
    //         }

    //     } catch (\Throwable $th) {
    //         Log::error('Error in AcceptProposals command in cron job: ' . $th->getMessage());
    //     }
    // }
}
