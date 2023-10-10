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
                $query->where('price', '!==', $req->price)
                    ->orWhere('country', $req->address)
                    ->orWhere(function ($subquery) use ($req) {
                        $subquery->where('title', $req->keyword)
                            ->orWhere('category', $req->keyword)
                            ->orWhere('activities', $req->keyword);
                    })
                    ->whereHas('quotes', function ($subquery) use ($req) {
                        $subquery->whereGuests($req->guests);
                    });
            })
                ->when($req->price !== null, function ($subquery) use ($req) {
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
                })->whereLastSteps('step-7')->whereStatus(1)->inRandomOrder()->get();
            $this->type = 'service';
            $this->map = view('content.components.__map', ['listing' => $this->listing])->render();
            $this->count = $this->listing->count();
            $this->data = view('content.components.__service', ['listing' => $this->listing])->render();

            return response()->json($this->data);
        } elseif ($type == 'entertainment') {
            $this->listing = Entertainment::where(function ($query) use ($req) {
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
            })
                ->orWhere(function ($query) use ($req, $formattedDate) {
                    $query->where('title', $req->keyword)
                        ->orWhere('country', $req->address)
                        ->orWhere(function ($subquery) use ($req) {
                            $subquery->whereHas('entertainmentActivities.entertainment', function ($subquery) use ($req) {
                                $subquery->whereTitle($req->keyword);
                            })
                                ->orWhereHas('entertainmentActivities.sub_act', function ($subquery) use ($req) {
                                    $subquery->whereTitle($req->keyword);
                                })
                                ->orWhereHas('entertainmentActivities.entActivityAmenity.activity', function ($subquery) use ($req) {
                                    $subquery->whereName($req->keyword);
                                });
                        })
                        ->orWhereHas('entertainmentActivities', function ($subquery) use ($req) {
                            $subquery->whereHourlyRate($req->price)->whereGuestCapacity($req->attendees);
                        })
                        ->orWhereHas('operatingDays', function ($subquery) use ($req) {
                            $subquery->whereHas('operatingHours', function ($subquery) use ($req) {
                                $subquery->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                            });
                        })
                        ->whereHas('blockTime', function ($subquery) use ($formattedDate) {
                            $subquery->whereNotNull('entertainment_id')->where(function ($query) use ($formattedDate) {
                                $query->whereAllDay('on')->where('start_time', '!==', $formattedDate);
                            })
                                ->orWhere('all_day', null)->where('start_time', '!==', $formattedDate)->where('end_time', '!==', $formattedDate);
                        })
                        ->whereHas('entertainmentHaveOrders', function ($subquery) use ($req, $formattedDate) {
                            $subquery->whereNotNull('entertainment_id')->where(function ($query) use ($req, $formattedDate) {
                                $query->where('date', $formattedDate)->where('start_time', '!==', $req->StartTime)
                                    ->where('end_time', '!==', $req->endTime);
                            });
                        });
                })->whereLastSteps('step-9')->whereStatus(1)
                ->inRandomOrder()->get();
            $this->type = 'entertainment';
            $this->map = view('content.components.__map', ['listing' => $this->listing])->render();
            $this->count = $this->listing->count();
            $this->data = view('content.components.__entertainment', ['listing' => $this->listing])->render();

            return response()->json($this->data);
        } elseif ($type == 'space') {
            $this->listing = Space::where(function ($query) use ($req) {
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
            })
                ->orWhere(function ($query) use ($req, $formattedDate) {
                    $query->when($req->has('keyword') || $req->has('address') || $req->has('price') || $req->has('attendees') || $req->has('startTime') || $req->has('endTime'),
                    function($query) use($req,$formattedDate){
                        $query->where('space_title', $req->keyword)
                        ->orWhere('country', $req->address)
                        ->orWhere('space_description', $req->keyword)
                        ->orWhere(function ($subquery) use ($req) {
                            $subquery->whereHas('spaceHaveActivities.activities', function ($subquery) use ($req) {
                                $subquery->whereTitle($req->keyword);
                            })
                                ->orWhereHas('spaceType', function ($subquery) use ($req) {
                                    $subquery->whereType($req->keyword);
                                })
                                ->orWhereHas('spaceHaveActivities.spaceAmenities', function ($subquery) use ($req) {
                                    $subquery->whereName($req->keyword);
                                });
                        })
                        ->whereHas('operatingDays', function ($subquery) use ($req) {
                            $subquery->whereHas('operatingHours', function ($subquery) use ($req) {
                                $subquery->whereStartTime($req->startTime)->whereEndTime($req->endTime);
                            });
                        })
                        ->whereHas('blockTime', function ($subquery) use ($formattedDate) {
                            $subquery->whereNotNull('space_id')->where(function ($query) use ($formattedDate) {
                                $query->whereAllDay('on')->where('start_time', '!==', $formattedDate);
                            })
                                ->orWhere('all_day', null)->where('start_time', '!==', $formattedDate)->where('end_time', '!==', $formattedDate);
                        })
                        ->whereHas('spaceHaveOrders', function ($subquery) use ($req, $formattedDate) {
                            $subquery->whereNotNull('space_id')->where(function ($subquery) use ($req, $formattedDate) {
                                $subquery->where('date', $formattedDate)->where('start_time', '!==', $req->StartTime)
                                    ->where('end_time', '!==', $req->endTime);
                            });
                        });
                    });
                })
                ->whereStatus('1')->whereLastStep('10')->whereStatus(1)->inRandomOrder()->get();
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
        $mergedArray = array_merge($space_type, $space_sub, $space_act);
        $res = [
            'data' => $mergedArray,
        ];

        return response()->json($res, 200);
    }
    public function landing_search(Request $req)
    {
        if ($req->type == 'space') {
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
                ->paginate(12);
            if (isset($space)) {
                $space = Space::inRandomOrder(5)->paginate(12);
            }
            $this->type = 'space';
            $this->listing = $space;
            $this->count = $this->listing->count();
            return view('content.customer.search-results', $this->data);
        } elseif ($req->type == 'entertainment') {
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
                ->whereLastSteps('step-9')->whereStatus(1)
                ->paginate(12);
            if (isset($ent)) {
                $ent = Entertainment::inRandomOrder(5)->whereStatus(1)->paginate(12);
            }
            $this->type = 'entertainment';
            $this->listing = $ent;
            $this->count = $this->listing->count();
            return view('content.customer.search-results', $this->data);
        } elseif ($req->type == 'service') {
            $service = Service::with('serviceImages')->where('title', $req->planCatagories_2)
                ->orWhere('category', $req->planCatagories_2)
                ->orWhere(function ($query) use ($req) {
                    $query->where('address', 'like', '%' . $req->location_2 . '%')
                        ->orWhere('country', $req->location_2)
                        ->orWhere('city', $req->location_2)
                        ->orWhere('state', $req->location_2);
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
        }
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
