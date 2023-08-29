<?php

namespace App\Http\Controllers;

use App\Models\EntActivity;
use App\Models\EntertainmentActivity;
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
            ->where(function ($query) use ($req) {
                $query->where('address', 'like', '%' . $req->location . '%')
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
        $ent = EntertainmentActivity::with('sub_act', 'sub_act.act', 'ent', 'ent.entertainmentImages')
            ->where(function ($query) use ($req) {
                $query->whereHas('sub_act', function ($subQuery) use ($req) {
                    $subQuery->whereTitle($req->planCatagories_1);
                })
                    ->orWhereHas('sub_act.act', function ($activityQuery) use ($req) {
                        $activityQuery->whereTitle($req->planCatagories_1);
                    });
            })
            ->whereHas('ent', function ($ent_query) use ($req) {
                $ent_query->whereLastSteps('step-9');
                $ent_query->where('address', 'like', '%' . $req->location_1 . '%')
                    ->orWhere('country', $req->location_1)
                    ->orWhere('city', $req->location_1)
                    ->orWhere('state', $req->location_1);
            })
            ->orderBy('id', 'desc')
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
