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
        if ($type == 'space') {
            $space = Space::with('spaceType', 'spaceHaveActivities', 'spaceImages')
                ->where('space_description', 'like', '%' . $req->keyword . '%')
                ->whereStatus('1')
                ->whereLastStep('10')
                ->where(function ($query) use ($req) {
                    // Use a where function to group your orWhere conditions correctly
                    $query->orWhereHas('spaceType', function ($query) use ($req) {
                        $query->where('type', $req->planCatagories);
                    })
                        ->orWhereHas('spaceHaveActivities.activities', function ($query) use ($req) {
                            $query->where('title', $req->planCatagories);
                        })
                        ->orWhere(function ($query) use ($req) {
                            // Use a nested orWhere for the spaceHaveActivities conditions
                            $query->whereHas('spaceHaveActivities', function ($query) use ($req) {
                                $query->where('rate_per_hour', $req->price)
                                    ->orWhere('max_guests', $req->guests);
                            });
                        });
                })
                ->get();

            $this->type = 'space';
            $this->data = $space;
            $this->count = $space->count();

            return view('content.components.__space', $this->data);

        } elseif ($type == 'entertainment') {
            $ent = Entertainment::with('entertainmentActivities', 'entertainmentActivities.entertainment', 'entertainmentActivities.sub_act', 'entertainmentActivities.sub_act.act')
                ->where(function ($query) use ($req) {
                    $query->whereHas('entertainmentActivities.entertainment', function ($subQuery) use ($req) {
                        $subQuery->orWhere('title', $req->planCatagories)
                            ->orWhere('description', 'Like', '%' . $req->keyword . '%');
                    });
                    $query->whereHas('entertainmentActivities.sub_act', function ($subQuery) use ($req) {
                        $subQuery->orWhere('title', $req->planCatagories);
                    });
                    $query->whereHas('entertainmentActivities', function ($subQuery) use ($req) {
                        $subQuery->orWhere('hourly_rate', $req->price)
                            ->orWhere('guest_capacity', $req->guests);
                    });
                })
                ->whereLastSteps('step-9')
                ->get();
            $this->type = 'entertainment';
            $this->data = $ent;
            return view('content.components.__entertainment', $this->data);

        } elseif ($type == 'service') {
            $service = Service::with('serviceImages')->where('title', $req->planCatagories)
                ->orWhere('category', $req->planCatagories)
                ->orWhere('description', $req->keyword)
                ->orWhere('price', 'LIKE', $req->price)
                ->whereLastSteps('step-7')
                ->get();
            $this->type = 'service';
            $this->data = $service;
            return view('content.components.__service', $this->data);
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
            ->whereStatus('1')
            ->whereLastStep('10')
            ->get();
        $this->type = 'space';
        $this->data = $space;
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
        $this->type = 'entertainment';
        $this->data = $ent;
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
        $this->type = 'service';
        $this->data = $service;
        return view('content.customer.search-results', $this->data);
    }
}
