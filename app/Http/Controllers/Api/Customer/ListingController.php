<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\Service;
use App\Models\Space;
use Illuminate\Http\Request;

class ListingController extends UserBaseController
{
    public function index()
    {
        $this->service = Service::with('serviceImages')->get();
        $this->space = Space::with('spaceImages')->get();
        return response()->json($this->data, 200);
    }
    public function listing($type)
    {
        if ($type == 'service') {
            $this->listing = Service::with('serviceImages')->get();
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::with('entertainmentImages', 'entertainmentActivities')->get();
        } elseif ($type == 'space') {
            $this->listing = Space::with('spaceImages', 'spaceHaveActivities')->get();
        }
        return response()->json($this->data, 200);
    }
    public function filter(Request $req, $type)
    {
        if ($type == 'service') {
            $this->listing = Service::with('serviceImages')->where(function ($query) use ($req) {
                $query->whereAddress($req->address)
                    ->orWhere('country', $req->address)
                    ->orWhere('city', $req->address)
                    ->orWhere('state', $req->address)
                    ->wherePrice($req->price)
                    ->orWhere('title', 'LIKE', '%' . $req->type . '%')
                    ->orWhere('category', 'LIKE', '%' . $req->type . '%')
                    ->orWhere('activities', 'LIKE', '%' . $req->type . '%')
                    ->whereHas('quotes', function ($subquery) use ($req) {
                        $subquery->whereGuests($req->guests);
                    });
            })
                ->orWhere(function ($query) use ($req) {
                    $query->when($req->price !== null, function ($subquery) use ($req) {
                        return $subquery->wherePrice($req->price);
                    });
                    $query->when($req->attendees !== null, function ($subquery) use ($req) {
                        $subquery->whereHas('quotes', function ($quotequery) use ($req) {
                            return $quotequery->whereGuests($req->attendees);
                        });
                    });
                })
                ->get();
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::with('entertainmentImages', 'entertainmentActivities')
                ->where(function ($query) use ($req) {
                    $query->when($req->price !== null, function ($subquery) use ($req) {
                        $subquery->whereHas('entertainmentActivities', function ($subquery1) use ($req) {
                            return $subquery1->whereHourlyRate($req->price);
                        });
                    });
                    $query->when($req->attendees !== null, function ($subquery) use ($req) {
                        $subquery->whereHas('entertainmentActivities', function ($subquery1) use ($req) {
                            return $subquery1->whereGuestCapacity($req->attendees);
                        });
                    });
                })
                ->orWhere(function ($query) use ($req,$type) {
                    $query->whereAddress($req->address)
                        ->orWhere('country', $req->address)
                        ->orWhere('city', $req->address)
                        ->orWhere('title', 'LIKE', '%' . $req->type . '%')
                        ->orWhere('state', $req->address)
                        ->orWhereHas('entertainmentActivities', function ($subquery) use ($req) {
                            $subquery->whereHourlyRate($req->price)->whereGuestCapacity($req->attendees);
                        })
                        ->orWhereHas('entertainmentActivities.entertainment', function ($subquery) use ($req) {
                            $subquery->whereTitle($req->type);
                        })
                        ->orWhereHas('entertainmentActivities.sub_act', function ($subquery) use ($req) {
                            $subquery->whereTitle($req->type);
                        })
                        ->orWhereHas('entertainmentActivities.entActivityAmenity.activity', function ($subquery) use ($req) {
                            $subquery->whereName($req->type);
                        })
                        ->orWhereHas('operatingDays', function ($subquery) use ($req, $type) {
                            $subquery->where('entertainment_id', '!==', null)
                                ->whereHas('operatingDays.operatingHours', function ($subquery1) use ($req) {
                                    $subquery1->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                                });
                        });
                })
                ->get();
        } elseif ($type == 'space') {
            $this->listing = Space::with('spaceImages', 'spaceHaveActivities')
                ->where(function ($query) use ($req) {
                    $query->when($req->price !== null, function ($subquery) use ($req) {
                        $subquery->whereHas('spaceHaveActivities', function ($subquery) use ($req) {
                            return $subquery->whereRatePerHour($req->price);
                        });
                    });
                    $query->when($req->attendees !== null, function ($subquery) use ($req) {
                        $subquery->whereHas('spaceHaveActivities', function ($subquery) use ($req) {
                            return $subquery->whereMaxGuests($req->attendees);
                        });
                    });
                })
                ->orWhere(function ($query) use ($req,$type) {
                    $query->whereAddress($req->address)
                        ->orWhere('country', $req->address)
                        ->orWhere('city', $req->address)
                        ->orWhere('state', $req->address)
                        ->orWhere('space_title', 'LIKE', '%' . $req->type . '%')
                        ->orWhereHas('spaceHaveActivities.activities', function ($subquery) use ($req) {
                            $subquery->whereTitle($req->type);
                        })
                        ->orWhereHas('spaceType', function ($subquery) use ($req) {
                            $subquery->whereType($req->type);
                        })
                        ->orWhereHas('spaceHaveActivities.spaceAmenities', function ($subquery) use ($req) {
                            $subquery->whereName($req->type);
                        })
                        ->orWhereHas('operatingDays', function ($subquery) use ($req, $type) {
                            $subquery->where('entertainment_id', '!=', null)
                                ->whereHas('operatingHours', function ($subquery1) use ($req) {
                                    $subquery1->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                                });
                        });                        
                })
                ->get();
        }
        return response()->json($this->data, 200);
    }

    public function listingDetail($id,$type)
    {
        if($type == 'service'){
            $this->detail = Service::with('serviceImages')->where('user_id','!=',user_id())->find($id);  
        }
        elseif($type == 'entertainment'){
            $this->detail = Entertainment::with('entertainmentImages', 'entertainmentActivities','entertainmentActivities.entActivityAmenity.activity','operatingDays','operatingDays.operatingHours')->find($id);  
        }
        elseif($type == 'space'){
            $this->detail = Space::with('spaceImages', 'spaceHaveActivities','operatingDays','operatingDays.operatingHours','spaceHaveSafetyMeasures','cancellationPolicy')->find($id);  
        }
        return response()->json($this->data, 200);
    }
}
