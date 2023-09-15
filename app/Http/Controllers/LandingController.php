<?php

namespace App\Http\Controllers;

use App\Models\EntActivity;
use App\Models\Entertainment;
use App\Models\EntSubActivity;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceTitle;
use App\Models\Space;
use App\Models\SpaceActivity;
use App\Models\SpaceSubActivity;
use App\Models\SpaceType;
use Illuminate\Http\Request;

class LandingController extends UserBaseController
{
    public function search(Request $req, $type)
    {
        if ($type == 'service') {
            $this->listing = Service::where(function ($query) use ($req) {
                $query->whereAddress($req->address)
                    ->wherePrice($req->price)
                    ->orWhere('country', $req->address)
                    ->orWhere('city', $req->address)
                    ->orWhere('state', $req->address)
                    ->orWhere('title', $req->type)
                    ->orWhere('category', $req->type)
                    ->orWhere('activities', $req->type)
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

            $this->type = 'service';
            $this->count = $this->listing->count();
            return view('content.components.__service', $this->data);

        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::where(function ($query) use ($req) {
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
                ->orWhere(function ($query) use ($req, $type) {
                    $query->whereAddress($req->address)
                        ->orWhere('country', $req->address)
                        ->orWhere('city', $req->address)
                        ->orWhere('state', $req->address)
                        ->orWhere('title', $req->keyword)
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
            $this->type = 'entertainment';
            $this->count = $this->listing->count();
            return view('content.components.__entertainment', $this->data);

        } elseif ($type == 'space') {
            $this->listing = Space::where(function ($query) use ($req) {
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
                ->orWhere(function ($query) use ($req, $type) {
                    $query
                        ->whereAddress($req->address)
                        ->orWhere('country', $req->address)
                        ->orWhere('city', $req->address)
                        ->orWhere('state', $req->address)
                        ->orWhere('space_title', $req->keyword)
                        ->orWhere('space_description', $req->keyword)
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
            $this->type = 'space';
            $this->count = $this->listing->count();
            return view('content.components.__space', $this->data);
        }
    }

    public function space_index()
    {
        $space_type = SpaceType::pluck('type')->toArray();
        $space_sub = SpaceSubActivity::pluck('title')->toArray();
        $space_act = SpaceActivity::pluck('title')->toArray();
        $mergedArray = array_merge($space_type, $space_sub, $space_act);
        $res = [
            'data' => $mergedArray,
        ];

        return response()->json($res, 200);
    }
    public function space_search(Request $req)
    {
        $space = Space::with('spaceType', 'spaceHaveActivities', 'spaceImages')
            ->whereHas('spaceType', function ($query) use ($req) {
                $query->where('type', $req->planCatagories);
            })
            ->orWhereHas('spaceHaveActivities.activities', function ($query) use ($req) {
                $query->where('title', $req->planCatagories);
            })
            ->orWhere(function ($query) use ($req) {
                $query->where('address', $req->location)
                    ->orWhere('country', $req->location)
                    ->orWhere('city', $req->location)
                    ->orWhere('state', $req->location)
                    ->where(function ($query) use ($req) {
                        $query->doesntHave('spaceType');
                    });
            })
            ->inRandomOrder()
            ->whereStatus('1')
            ->whereLastStep('10')
            ->get();
        if (isset($space)) {
            $space = Space::inRandomOrder(5)->get();
        }
        $this->type = 'space';
        $this->listing = $space;
        return view('content.customer.search-results', $this->data);
    }

    public function entertainment_index()
    {
        $ent_act = EntActivity::pluck('title')->toArray();
        $ent_sub = EntSubActivity::pluck('title')->toArray();
        $mergedArray = array_merge($ent_sub, $ent_act);
        $res = [
            'data' => $mergedArray,
        ];

        return response()->json($res, 200);
    }
    public function entertainment_search(Request $req)
    {
        $ent = Entertainment::with('entertainmentActivities', 'entertainmentActivities.entertainment', 'entertainmentActivities.sub_act', 'entertainmentActivities.sub_act.act')
            ->where(function ($query) use ($req) {
                $query->whereHas('entertainmentActivities.entertainment', function ($subQuery) use ($req) {
                    $subQuery->orWhere('title', $req->planCatagories_1)
                        ->orWhere('description', 'Like', '%' . $req->planCatagories_1 . '%');
                })
                    ->orWhere(function ($locationQuery) use ($req) {
                        if ($req->location_1) {
                            $locationQuery->where('address', $req->location_1)
                                ->orWhere('country', $req->location_1)
                                ->orWhere('city', $req->location_1)
                                ->orWhere('state', $req->location_1);
                        }
                    });
            })
            ->whereLastSteps('step-9')
            ->get();
        if (isset($ent)) {
            $ent = Entertainment::inRandomOrder(5)->get();
        }
        $this->type = 'entertainment';
        $this->listing = $ent;
        return view('content.customer.search-results', $this->data);
    }
    public function service_index()
    {
        $service_cat = ServiceCategory::pluck('name')->toArray();
        $service_title = ServiceTitle::pluck('name')->toArray();
        $mergedArray = array_merge($service_cat, $service_title);
        $res = [
            'data' => $mergedArray,
        ];

        return response()->json($res, 200);
    }
    public function service_search(Request $req)
    {
        $service = Service::with('serviceImages')->where('title', $req->planCatagories_2)
            ->orWhere('category', $req->planCatagories_2)
            ->orWhere(function ($query) use ($req) {
                $query->where('address', 'like', '%' . $req->location_2 . '%')
                    ->orWhere('country', $req->location_2)
                    ->orWhere('city', $req->location_2)
                    ->orWhere('state', $req->location_2);
            })
            ->whereLastSteps('step-7')
            ->get();
        if (isset($service)) {
            $service = Service::inRandomOrder(5)->get();
        }
        $this->type = 'service';
        $this->listing = $service;
        return view('content.customer.search-results', $this->data);
    }
}
