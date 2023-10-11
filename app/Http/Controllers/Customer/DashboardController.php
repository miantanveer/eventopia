<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends UserBaseController
{
    public function index()
    {
        $totalSpaceOrders = Order::where(function ($query) {
            $query->whereHas('space', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereUserId(user_id())->whereType('space')->count();

        $this->activeSpaceBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('space')->whereUserId(user_id())->whereStatus(2)->count();

        $this->completedSpaceBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('space')->whereUserId(user_id())->whereStatus(4)->count();

        $this->cancelSpaceBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('space')->whereUserId(user_id())->whereStatus(3)->count();

        $this->pendingSpaceBookings = Order::where(function ($query) {
            $query->whereHas('space', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('space')->whereUserId(user_id())->whereStatus(1)->count();


        $totalEnterOrders = Order::where(function ($query) {
            $query->whereHas('entertainment', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('entertainment')->whereUserId(user_id())->count();

        $this->activeEnterBookings = Order::where(function ($query) {
            $query->whereHas('entertainment', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('entertainment')->whereUserId(user_id())->whereStatus(2)->count();

        $this->completedEnterBookings = Order::where(function ($query) {
            $query->whereHas('entertainment', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('entertainment')->whereUserId(user_id())->whereStatus(4)->count();

        $this->cancelEnterBookings = Order::where(function ($query) {
            $query->whereHas('entertainment', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('entertainment')->whereUserId(user_id())->whereStatus(3)->count();

        $this->pendingEnterBookings = Order::where(function ($query) {
            $query->whereHas('entertainment', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('entertainment')->whereUserId(user_id())->whereStatus(1)->count();

        $totalServiceOrders = Order::where(function ($query) {
            $query->whereHas('service', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('service')->whereUserId(user_id())->count();

        $this->activeServiceBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('service')->whereUserId(user_id())->whereStatus(2)->count();

        $this->completedServiceBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('service')->whereUserId(user_id())->whereStatus(4)->count();

        $this->cancelServiceBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('service')->whereUserId(user_id())->whereStatus(3)->count();

        $this->pendingServiceBookings = Order::where(function ($query) {
            $query->whereHas('service', function ($subQuery) {
                $subQuery->where('user_id', '!=', user_id());
            });
        })->whereType('service')->whereUserId(user_id())->whereStatus(1)->count();

        $this->spaceCompletedProgress = $totalSpaceOrders ? ($this->completedSpaceBookings / $totalSpaceOrders) * 100 : 0;
        $this->spaceActiveProgress = $totalSpaceOrders ? ($this->activeSpaceBookings / $totalSpaceOrders) * 100 : 0;
        $this->spaceCancelProgress = $totalSpaceOrders ? ($this->cancelSpaceBookings / $totalSpaceOrders) * 100 : 0;
        $this->spacePendingProgress = $totalSpaceOrders ? ($this->pendingSpaceBookings / $totalSpaceOrders) * 100 : 0;

        $this->enterCompletedProgress = $totalEnterOrders ? ($this->completedEnterBookings / $totalEnterOrders) * 100 : 0;
        $this->enterActiveProgress = $totalEnterOrders ? ($this->activeEnterBookings / $totalEnterOrders) * 100 : 0;
        $this->enterCancelProgress = $totalEnterOrders ? ($this->cancelEnterBookings / $totalEnterOrders) * 100 : 0;
        $this->enterPendingProgress = $totalEnterOrders ? ($this->pendingEnterBookings / $totalEnterOrders) * 100 : 0;

        $this->serviceCompletedProgress = $totalServiceOrders ? ($this->completedServiceBookings / $totalServiceOrders) * 100 : 0;
        $this->serviceActiveProgress = $totalServiceOrders ? ($this->activeServiceBookings / $totalServiceOrders) * 100 : 0;
        $this->serviceCancelProgress = $totalServiceOrders ? ($this->cancelServiceBookings / $totalServiceOrders) * 100 : 0;
        $this->servicePendingProgress = $totalServiceOrders ? ($this->pendingServiceBookings / $totalServiceOrders) * 100 : 0;

        $this->totalBookingsCount = $totalSpaceOrders + $totalEnterOrders + $totalServiceOrders;
        $this->totalBookings = Order::whereUserId(user_id())->whereIn('status', [1, 2, 3])->take(5)->get();

        $this->cancelBookingCount = $this->cancelSpaceBookings + $this->cancelEnterBookings + $this->cancelServiceBookings;
        $this->activeBookingCount = Order::whereUserId(user_id())->whereStatus(2)->count();

        return view('content.customer.customer-dashboard', $this->data);
    }

    public function editProfileIndex()
    {
        return view('content.customer.edit-profile');
    }

    public function editProfile(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'password' => 'required|confirmed',
                'phone_number' => 'required',
                'email' => 'required|email',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $req->except('_token', 'image');

            $userWithPhoneNumber = User::wherePhoneNumber($req->phone_number)->first();

            if ($userWithPhoneNumber && $userWithPhoneNumber->phone_number_verified_at && $userWithPhoneNumber->password) {
                return redirect()->back()->with('error', 'Phone number has been taken');
            } elseif ($userWithPhoneNumber && $userWithPhoneNumber->status == 2) {
                $userWithPhoneNumber->delete();
            }

            $userWithEmail = User::whereEmail($req->email)->first();

            if ($userWithEmail && $userWithEmail->email_verified_at && $userWithEmail->password) {
                return redirect()->back()->with('error', 'Email has been taken');
            } elseif ($userWithEmail && $userWithEmail->status == 2) {
                $userWithEmail->delete();
            }

            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $foldername = 'uploads/customer/profile_pic/';
                $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
                Storage::disk("s3")->putFileAs($foldername, $image, $filename);
                User::find(auth()->user()->id)->update(['image' => $foldername . $filename]);
            }

            User::find(auth()->user()->id)->update($data); 

            return back()->with('success', 'Profile updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }
}
