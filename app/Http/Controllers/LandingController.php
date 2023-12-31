<?php

namespace App\Http\Controllers;

use App\Models\EntActivity;
use App\Models\Entertainment;
use App\Models\EntSubActivity;
use App\Models\Search;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceTitle;
use App\Models\Space;
use App\Models\SpaceActivity;
use App\Models\SpaceAmenity;
use App\Models\SpaceSubActivity;
use App\Models\SpaceType;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class LandingController extends UserBaseController
{
    public function search(Request $req, $type)
    {
        $formattedDate = '';
        if ($req->has('date')) {
            $dateString = $req->date;
            $dateTime = new DateTime($dateString);
            $formattedDate = $dateTime->format('Y-m-d');
        }
        if ($type == 'service') {
            $this->listing = Service::where(function ($query) use ($req) {
                // Price Filter
                $query->when($req->price !== null, function ($subquery) use ($req) {
                    $subquery->orWhere(function ($query) use ($req) {
                        $price = $req->price;
                        $priceRanges = [0, 5000, 10000, 50000, 99999];
                        foreach ($priceRanges as $index => $range) {
                            if ($price == $range) {
                                return $query->whereBetween('price', [$priceRanges[$index - 1], $priceRanges[$index]]);
                                break;
                            } elseif ($price == '10000') {
                                $query->where('price', '>=', 5000);
                                break;
                            }
                        };
                    });
                });
                // Guests Filter
                $query->when($req->guests !== null, function ($subquery) use ($req) {
                    $subquery->whereHas('quotes', function ($subquery) use ($req) {
                        $subquery->whereGuests($req->guests);
                    });
                });
                // Location Filter
                $query->when($req->address !== null, function ($subquery) use ($req) {
                    $subquery->where('country', $req->address);
                });
                // Keyword Filter
                $query->when($req->keyword !== null, function ($subquery) use ($req) {
                    $subquery->where(function ($subquery) use ($req) {
                        $subquery->where('title', $req->keyword)
                            ->orWhere('category', $req->keyword)
                            ->orWhere('activities', $req->keyword);
                    });
                });
            })->whereLastSteps('step-7')->whereStatus(1)->inRandomOrder()->get();
            $this->type = 'service';
            $this->map = view('content.components.__map', ['listing' => $this->listing])->render();
            $this->count = $this->listing->count();
            $this->data = view('content.components.__service', ['listing' => $this->listing])->render();

            return response()->json($this->data);
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::where(function ($query) use ($req, $formattedDate) {
                // Price Filter
                $query->when($req->price !== null, function ($subquery) use ($req) {
                    $subquery->whereHas(
                        'entertainmentActivities',
                        function ($subquery) use ($req) {
                            if ($req->has('price')) {
                                $price = $req->price;
                                $priceRanges = [0, 5000, 10000, 50000, 99999];

                                foreach ($priceRanges as $index => $range) {
                                    if ($price == $range) {
                                        return $subquery->whereBetween('hourly_rate', [$priceRanges[$index - 1], $priceRanges[$index]]);
                                        break;
                                    } elseif ($price == '1000') {
                                        $subquery->where('hourly_rate', '>=', 1000);
                                        break;
                                    }
                                }
                            }
                        }
                    );
                });
                // Guests Filter
                $query->when($req->attendees !== null, function ($subquery) use ($req) {
                    $subquery->whereHas(
                        'entertainmentActivities',
                        function ($subquery) use ($req) {
                            $attendees = $req->attendees;
                            $attendeesRanges = [0, 10, 25, 50, 100, 499];

                            foreach ($attendeesRanges as $index => $range) {
                                if ($attendees == $range) {
                                    $subquery->whereBetween('guest_capacity', [$attendeesRanges[$index - 1], $attendeesRanges[$index]]);
                                    break;
                                } elseif ($attendees == '500') {
                                    $subquery->where('guest_capacity', '>=', 500);
                                    break;
                                }
                            }
                        }
                    );
                });
                // Address Filter
                $query->when($req->address !== null, function ($subquery) use ($req) {
                    $subquery->whereCountry($req->address);
                });
                // Keyword Filter
                $query->when($req->keyword !== null, function ($subquery) use ($req) {
                    $subquery->where('title', $req->keyword)
                        ->orWhereHas('entertainmentActivities.entertainment', function ($subquery) use ($req) {
                            $subquery->whereTitle($req->keyword);
                        })
                        ->orWhereHas('entertainmentActivities.sub_act', function ($subquery) use ($req) {
                            $subquery->whereTitle($req->keyword);
                        })
                        ->orWhereHas('entertainmentActivities.entActivityAmenity.activity', function ($subquery) use ($req) {
                            $subquery->whereName($req->keyword);
                        });
                });
                // Time Filter
                $query->when($req->startTime !== '6 AM' && $req->endTime !== '6 AM', function ($subquery) use ($req, $formattedDate) {
                    $subquery->whereHas('operatingDays', function ($subquery) use ($req) {
                        $subquery->whereHas('operatingHours', function ($subquery) use ($req) {
                            $subquery->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                        });
                    })
                        ->orWhereHas('blockTime', function ($subquery) use ($formattedDate) {
                            $subquery->whereNotNull('entertainment_id')->where(function ($query) use ($formattedDate) {
                                $query->whereAllDay('on')->where('start_time', '!==', $formattedDate);
                            })
                                ->orWhere('all_day', null)->where('start_time', '!==', $formattedDate)->where('end_time', '!==', $formattedDate);
                        })
                        ->orWhereHas('entertainmentHaveOrders', function ($subquery) use ($req, $formattedDate) {
                            $subquery->whereNotNull('entertainment_id')->where(function ($query) use ($req, $formattedDate) {
                                $query->where('date', $formattedDate)->where('start_time', '!==', $req->StartTime)
                                    ->where('end_time', '!==', $req->endTime);
                            });
                        });
                });
            })->whereLastSteps('step-9')->whereStatus('1')->inRandomOrder()->get();
            $this->type = 'entertainment';
            $this->map = view('content.components.__map', ['listing' => $this->listing])->render();
            $this->count = $this->listing->count();
            $this->data = view('content.components.__entertainment', ['listing' => $this->listing])->render();

            return response()->json($this->data);
        } elseif ($type == 'space') {
            $this->listing = Space::where(function ($query) use ($req, $formattedDate) {
                // Price Filter
                $query->when(isset($req->price), function ($subquery) use ($req) {
                    $subquery->whereHas('spaceHaveActivities', function ($subquery) use ($req) {
                        $price = $req->price;
                        $priceRanges = [0, 5000, 10000, 50000, 99999];

                        if ($price == '50000') {
                            $subquery->where('rate_per_hour', '>=', 50000);
                        } else {
                            if ($price >= 5000) {
                                foreach ($priceRanges as $index => $range) {
                                    if ($price == $range) {
                                        $lastIndex =  $priceRanges[$index - 1];
                                        $subquery->whereBetween('rate_per_hour', [$lastIndex, $priceRanges[$index]]);
                                        break;
                                    }
                                }
                            }
                        }
                    });
                });
                // Guests Filter
                $query->when(isset($req->attendees), function ($subquery) use ($req) {
                    $subquery->whereHas('spaceHaveActivities', function ($subquery) use ($req) {
                        $attendees = $req->attendees;
                        $attendeesRanges = [0, 10, 25, 50, 100, 499];

                        if ($attendees == '500') {
                            $subquery->where('max_guests', '>=', 500);
                        } else {
                            if ($attendees >= 10) {
                                foreach ($attendeesRanges as $index => $range) {
                                    if ($attendees == $range) {
                                        $lastIndex =  $attendeesRanges[$index - 1];
                                        $subquery->whereBetween('max_guests', [$lastIndex, $attendeesRanges[$index]]);
                                        break;
                                    }
                                }
                            }
                        }
                    });
                });
                // Address Filter
                $query->when(isset($req->address), function ($subquery) use ($req) {
                    $subquery->where('country', $req->address);
                });
                // Keyword Filter
                $query->when(isset($req->keyword), function ($subquery) use ($req) {
                    $subquery->where('space_title', $req->keyword)
                        ->orWhere(function ($subquery) use ($req) {
                            $subquery->orWhereHas('spaceHaveActivities.activities', function ($subquery) use ($req) {
                                $subquery->whereTitle($req->keyword);
                            })
                                ->orWhereHas('spaceType', function ($subquery) use ($req) {
                                    $subquery->whereType($req->keyword);
                                })
                                ->orWhereHas('spaceHaveActivities.spaceAmenities', function ($subquery) use ($req) {
                                    $subquery->whereName($req->keyword);
                                });
                        });
                });
                // Time Filter
                $query->when($req->startTime !== '6 AM' && $req->endTime !== '6 AM', function ($subquery) use ($req, $formattedDate) {
                    $subquery->whereHas('operatingDays', function ($subquery) use ($req) {
                        $subquery->whereHas('operatingHours', function ($subquery) use ($req) {
                            $subquery->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                        });
                    });
                    $subquery->whereHas('blockTime', function ($subquery) use ($formattedDate) {
                        $subquery->whereNotNull('space_id')->where(function ($query) use ($formattedDate) {
                            $query->whereAllDay('on')->where('start_time', '!==', $formattedDate);
                        })
                            ->orWhere('all_day', null)->where('start_time', '!==', $formattedDate)->where('end_time', '!==', $formattedDate);
                    });
                    $subquery->whereHas('spaceHaveOrders', function ($subquery) use ($req, $formattedDate) {
                        $subquery->whereNotNull('space_id')->where(function ($subquery) use ($req, $formattedDate) {
                            $subquery->where('date', $formattedDate)->where('start_time', '!==', $req->StartTime)
                                ->where('end_time', '!==', $req->endTime);
                        });
                    });
                });
            })->whereStatus('1')->whereLastStep('10')->inRandomOrder()->get();
            $this->type = 'space';
            $this->count = $this->listing->count();
            $this->map = view('content.components.__map', ['listing' => $this->listing])->render();
            $this->data = view('content.components.__space', ['listing' => $this->listing])->render();

            return response()->json($this->data);
        }
    }

    public function space_index()
    {
        $space_type = SpaceType::pluck('type')->toArray();
        $space_sub = SpaceSubActivity::pluck('title')->toArray();
        $space_act = SpaceActivity::pluck('title')->toArray();
        $space_amn = SpaceAmenity::pluck('name')->toArray();
        $mergedArray = array_merge($space_type, $space_sub, $space_act, $space_amn,);
        $res = [
            'data' => $mergedArray,
        ];

        return response()->json($res, 200);
    }

    public function landing_search(Request $request)
    {
        $this->start_price = $request->start_price ?? 0;
        $this->end_price = $request->end_price ?? 0;
        $this->start_attendees = $request->start_attendees ?? 0;
        $this->end_attendees = $request->end_attendees ?? 0;
        $this->date_time = $request->date ? $request->date . ' ' . $request->start_time . ' to ' . $request->end_time : '';
        $this->location = $request->location ?? '';
        $this->planCatagories = $request->planCatagories ?? '';
        // dd($request->all());

        Search::truncate();
        foreach (Space::whereLastStep('10')->whereStatus('1')->get() as $row) {
            // dd($row->spaceHaveActivities[0]->activities);
            $activities = '';
            foreach ($row->spaceHaveActivities as $act) {
                $activities .= ' ' . $act->activities->title;
            }
            if ($row->operatingDays) {
                $weekdays = @json_encode($row->operatingDays->pluck('week_day'));
            } else {
                $weekdays = '';
            }
            $search = new Search();
            $search->titles = $row->space_title;
            $search->description = $row->parking_description . ' ' . $row->space_description . ' ' . $row->security_devices_description . ' ' . $row->space_rules . ' ' . $row->arrival_instruction . ' ' . $row->cleaning_process;
            $search->type = $row->spaceType->type;
            $search->category = $activities;
            $search->address = $row->address;
            $search->country = $row->country;
            $search->city = $row->city;
            $search->state = $row->state;
            $search->postal_code = $row->postal_code;
            $search->operating_days = $weekdays;
            $search->price = '';
            $search->listing_type = 'space';
            $search->listing_id = $row->id;
            $search->lng = $row->lng;
            $search->lat = $row->lat;
            $search->save();
        }



        foreach (Entertainment::whereLastSteps('step-9')->whereStatus('1')->get() as $row) {
            // dd($row->spaceHaveActivities[0]->activities);
            $activities = '';
            $descriptions = '';
            foreach ($row->entertainmentActivities as $act) {
                $activities .= ' ' . $act->entertainment->title;
                $descriptions .= ' ' . $act->entertainment->description;
            }
            if ($row->operatingDays) {
                $weekdays = @json_encode($row->operatingDays->pluck('week_day'));
            } else {
                $weekdays = '';
            }
            $search = new Search();
            $search->titles = $row->title;
            $search->description = $row->comedian . ' ' . $row->house_rules . ' ' . $row->recordings . ' ' . $row->arrival . ' ' . $descriptions;
            $search->type = ''; //$row->spaceType->type;
            $search->category = $activities;
            $search->address = $row->address;
            $search->country = $row->country;
            $search->city = $row->city;
            $search->state = $row->state;
            $search->postal_code = $row->postal_code;
            $search->operating_days = $weekdays;
            $search->price = '';
            $search->listing_type = 'entertainment';
            $search->listing_id = $row->id;
            $search->lng = $row->lng;
            $search->lat = $row->lat;
            $search->save();
        }


        foreach (Service::whereLastSteps('step-7')->whereStatus('1')->get() as $row) {
            // dd($row->spaceHaveActivities[0]->activities);
            /* $activities = '';
            $descriptions = '';
            foreach($row->entertainmentActivities as $act) {
                $activities .= ' ' . $act->entertainment->title;
                $descriptions .= ' ' . $act->entertainment->description;
            } */
            if ($row->operatingDays) {
                $weekdays = @json_encode($row->operatingDays->pluck('week_day'));
            } else {
                $weekdays = '';
            }
            $search = new Search();
            $search->titles = $row->title;
            $search->description = $row->description . ' ' . $row->destination . ' ' . $row->planing . ' ' . $row->activities . ' ' . $row->development . ' ' . $row->concept_building . ' ' . $row->planning_developement . ' ' . $row->planning_developement;
            $search->type = ''; //$row->spaceType->type;
            $search->category = $row->category;
            $search->address = $row->address;
            $search->country = $row->country;
            $search->city = $row->city;
            $search->state = $row->state;
            $search->postal_code = $row->postal_code;
            $search->operating_days = $weekdays;
            $search->price = $row->price;
            $search->listing_type = 'service';
            $search->listing_id = $row->id;
            $search->lng = $row->lng;
            $search->lat = $row->lat;
            $search->save();
        }

        /* $service = Service::with('serviceImages')->where('title', $request->planCatagories_2)
                ->orWhere('category', $request->planCatagories_2)
                ->orWhere(function ($query) use ($request) {
                    $query->where('address', 'like', '%' . $request->location_2 . '%')
                        ->orWhere('country', $request->location_2)
                        ->orWhere('city', $request->location_2)
                        ->orWhere('state', $request->location_2);
                })
                ->whereLastSteps('step-7')->whereStatus(1)
                ->paginate(12); */

        $query = Search::query();

        if ($request->planCatagories != '') {
            $query->where('description', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('type', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('category', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('address', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('country', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('city', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('state', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('postal_code', 'LIKE', '%' . $request->planCatagories . '%')
                ->orWhere('operating_days', 'LIKE', '%' . $request->planCatagories . '%');
        }

        if ($request->location != '') {
            $query->where(function ($qry) use ($request) {
                $qry->where('address', 'LIKE', '%' .  $request->location . '%')
                    ->orWhere('country', 'LIKE', '%' .  $request->location . '%')
                    ->orWhere('city', 'LIKE', '%' .  $request->location . '%')
                    ->orWhere('state', 'LIKE', '%' .  $request->location . '%');
            });
        }

        if ($request->date != '') {
            $query->whereHas('operatingDays', function ($qry) use ($request) {
                $date = $request->date;
                $date = Carbon::parse($date);
                $weekdayName = $date->format('l');
                $qry->where('operating_days', 'LIKE', '%' . $weekdayName . '%');
            });
        }


        $this->count = $query->count();
        $listing = $query->paginate(12);
        $this->type = 'space';
        $this->listing = $listing;
        return view('content.customer.search', $this->data);


        /* if ($request->type == 'space') {
            $query = Space::query();

            if ($request->planCatagories != '') {
                $query->with('spaceType', 'spaceHaveActivities', 'spaceImages')
                    ->whereHas('spaceType', function ($qry) use ($request) {
                        $qry->where('type', 'LIKE', '%' . $request->planCatagories . '%');
                    })
                    ->orWhereHas('spaceHaveActivities.activities', function ($qry) use ($request) {
                        $qry->where('title', 'LIKE', '%' . $request->planCatagories . '%');
                    })
                    ->orWhere('address', 'LIKE', '%' .  $request->planCatagories . '%')
                    ->orWhere('country', 'LIKE', '%' .  $request->planCatagories . '%')
                    ->orWhere('city', 'LIKE', '%' .  $request->planCatagories . '%')
                    ->orWhere('state', 'LIKE', '%' .  $request->planCatagories . '%')
                    ->orWhere('space_title', 'LIKE', '%' . $request->planCatagories . '%')
                    ->where(function ($qry) use ($request) {
                        // $qry->doesntHave('spaceType');
                    });
            }
            if ($request->location != '') {
                $query->where(function ($qry) use ($request) {
                    $qry->where('address', 'LIKE', '%' .  $request->location . '%')
                        ->orWhere('country', 'LIKE', '%' .  $request->location . '%')
                        ->orWhere('city', 'LIKE', '%' .  $request->location . '%')
                        ->orWhere('state', 'LIKE', '%' .  $request->location . '%')
                        ->where(function ($qry) use ($request) {
                            // $qry->doesntHave('spaceType');
                        });
                });
            }

            if ($request->date != '') {
                $query->whereHas('operatingDays', function ($qry) use ($request) {
                    $date = $request->date;
                    $date = Carbon::parse($date);
                    $weekdayName = $date->format('l');
                    $qry->where('week_day', $weekdayName);
                });
            }
            // $sql = $query->toSql();
            // dd($query->get());
            $query->latest()
                // ->whereStatus('1')
                ->whereLastStep('10');

            $this->total_record = $query->count();
            $space = $query->paginate(12);

            if ($query->count() == 0) {
                $query2 = Space::latest()->whereLastStep('10');
                $this->total_record = $query2->count();
                $space = $query2->paginate(12);
            }
            $this->type = 'space';
            $this->listing = $space;
            $this->count = $this->listing->count();
            return view('content.customer.search-results', $this->data);
        } elseif ($request->type == 'entertainment') {
            $ent = Entertainment::with('entertainmentActivities', 'entertainmentActivities.entertainment', 'entertainmentActivities.sub_act', 'entertainmentActivities.sub_act.act')
                ->where(function ($query) use ($request) {
                    $query->whereHas('entertainmentActivities.entertainment', function ($subQuery) use ($request) {
                        $subQuery->orWhere('title', $request->planCatagories_1)
                            ->orWhere('description', 'Like', '%' . $request->planCatagories_1 . '%');
                    })
                        ->orWhere(function ($locationQuery) use ($request) {
                            if ($request->location_1) {
                                $locationQuery->where('address', $request->location_1)
                                    ->orWhere('country', $request->location_1)
                                    ->orWhere('city', $request->location_1)
                                    ->orWhere('state', $request->location_1);
                            }
                        });
                })
                ->whereLastSteps('step-9')->whereStatus(1)
                ->paginate(12);
            if (isset($ent)) {
                $ent = Entertainment::inRandomOrder(5)->whereStatus(1)->paginate(12);
            }
            $this->type = 'entertainment';
            $this->listing = $ent;
            $this->count = $this->listing->count();
            return view('content.customer.search-results', $this->data);
        } elseif ($request->type == 'service') {
            $service = Service::with('serviceImages')->where('title', $request->planCatagories_2)
                ->orWhere('category', $request->planCatagories_2)
                ->orWhere(function ($query) use ($request) {
                    $query->where('address', 'like', '%' . $request->location_2 . '%')
                        ->orWhere('country', $request->location_2)
                        ->orWhere('city', $request->location_2)
                        ->orWhere('state', $request->location_2);
                })
                ->whereLastSteps('step-7')->whereStatus(1)
                ->paginate(12);
            if (isset($service)) {
                $service = Service::inRandomOrder(5)->whereStatus(1)->paginate(12);
            }
            $this->type = 'service';
            $this->listing = $service;
            $this->count = $this->listing->count();
            return view('content.customer.search-results', $this->data);
        } */
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
}
