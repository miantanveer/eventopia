<?php

namespace App\Http\Controllers;

use App\Models\BlockTime;
use App\Models\Entertainment;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\Service;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class LandingPageController extends UserBaseController
{
    public function calendarIndex()
    {
        if (Auth::check()) {

            $this->spaces = Space::whereUserId(user_id())->whereLastStep('10')->whereStatus('1')->get();
            $this->entertainments = Entertainment::whereUserId(user_id())->whereStatus(1)->whereLastSteps('step-9')->get();
            $this->services = Service::whereUserId(user_id())->whereStatus(1)->whereLastSteps('step-7')->get();

            return view('content.seller.calendar', $this->data);
        }
        return view('content.auth.login');
    }

    public function getOperatingHours($id, $type)
    {
        $operatingDayModel = null;
        if ($type === 'space') {
            $operatingDayModel = 'space_id';
        } elseif ($type === 'service') {
            $operatingDayModel = 'service_id';
        } elseif ($type === 'entertainment') {
            $operatingDayModel = 'entertainment_id';
        }

        if ($operatingDayModel) {
            $operatingDays = OperatingDay::where($operatingDayModel, $id)->get();

            $operatingHoursData = [];

            foreach ($operatingDays as $operatingDay) {
                $operatingHoursData[$operatingDay->week_day] = [];

                foreach ($operatingDay->operatingHours as $operatingHour) {
                    $hours = [
                        'radio' => $operatingHour->radio,
                        'start_time' => $operatingHour->start_time,
                        'end_time' => $operatingHour->end_time,
                    ];

                    if ($operatingHour->radio === '0') {
                        $hours['start_time'] = '6:00 AM';
                        $hours['end_time'] = '12:00 AM';
                    }

                    $operatingHoursData[$operatingDay->week_day][] = $hours;
                }
            }
            return response()->json($operatingHoursData);
        } else {
            return response()->json([], 404);
        }
    }

    public function getOperatingHoursIndex($id, $type)
    {
        return view('content.seller.operating-hours', ['id' => $id, 'type' => $type]);
    }

    public function newOperatingHours(Request $req)
    {
        try {
            if ($req->type === 'space') {
                $data = Space::find($req->id);
            } elseif ($req->type === 'entertainment') {
                $data = Entertainment::find($req->id);
            } elseif ($req->type === 'service') {
                $data = Service::find($req->id);
            }

            if ($data) {
                $data->operatingDays()->delete();
            }

            $weekDay = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
            $counts = [0, 1, 2, 3, 4];
            foreach ($weekDay as $weekDay) {
                if ($req->$weekDay == $weekDay) {
                    $day = new OperatingDay();
                    $type = $req->type . '_id';
                    $day->$type = $data->id;
                    $day->week_day = $weekDay;
                    $day->save();
                    $week_day = $weekDay . '_radio';
                }
                foreach ($counts as $count) {
                    $start_time = $weekDay . '_start_time_' . $count;
                    $end_time = $weekDay . '_end_time_' . $count;
                    if ($req->$start_time && $req->$end_time !== null) {
                        $hour = new OperatingHour();
                        $hour->operating_day_id = $day->id;
                        $hour->radio = $req->$week_day;
                        $hour->start_time = $req->$start_time;
                        $hour->end_time = $req->$end_time;
                        $hour->save();
                    }
                }
            }

            return redirect()->route('calendar')->with('success', 'Operating hours updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addBlockTime(Request $req)
    {
        try {
            $validator = Validator::make($req->all(), [
                'id' => 'required',
                'title' => 'required',
                'start_time' => [
                    Rule::requiredIf(!$req->all_day),
                ],
                'end_time' => [
                    Rule::requiredIf(!$req->all_day),
                ],
            ], [
                'id.required' => 'Please Select your listing first.',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = $req->except('_token');
            $type_id = $req->type . '_id';
            $data[$type_id] = $req->id;

            // Check if a block time already exists for the given type
            $existingBlockTime = BlockTime::where($type_id, $req->id)->first();

            if ($existingBlockTime) {
                // Delete the existing block time
                $existingBlockTime->delete();
            }

            // Create a new block time entry
            $blockTime = BlockTime::create($data);

            if (!$blockTime) {
                return redirect()->back()->with('error', 'Block Time is not created.');
            }

            return redirect()->back()->with('success', 'Block Time has been created.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function termsAndConditions()
    {
        return view('content.terms-and-conditions');
    }
}
