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

            $this->spaces = Space::whereUserId(auth()->user()->id)->whereLastStep('10')->whereStatus('1')->get();
            $this->entertainments = Entertainment::whereUserId(auth()->user()->id)->whereLastSteps('step-9')->get();
            $this->services = Service::whereUserId(auth()->user()->id)->whereLastSteps('step-7')->get();

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
            return response()->json([], 404); // Return empty data or custom response code for invalid type
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
                $data->operatingDays()->delete(); // Assuming you have a relationship method named operatingDays
            }

            if ($req->has('monday')) $this->operatingDay($req->id, $req->type, $req->monday, $req->monday_radio, $req->monday_start_time, $req->monday_end_time);
            if ($req->has('tuesday')) $this->operatingDay($req->id, $req->type, $req->tuesday, $req->tuesday_radio, $req->tuesday_start_time, $req->tuesday_end_time);
            if ($req->has('wednesday')) $this->operatingDay($req->id, $req->type, $req->wednesday, $req->wednesday_radio, $req->wednesday_start_time, $req->wednesday_end_time);
            if ($req->has('thursday')) $this->operatingDay($req->id, $req->type, $req->thursday, $req->thursday_radio, $req->thursday_start_time, $req->thursday_end_time);
            if ($req->has('friday')) $this->operatingDay($req->id, $req->type, $req->friday, $req->friday_radio, $req->friday_start_time, $req->friday_end_time);
            if ($req->has('saturday')) $this->operatingDay($req->id, $req->type, $req->saturday, $req->saturday_radio, $req->saturday_start_time, $req->saturday_end_time);
            if ($req->has('sunday')) $this->operatingDay($req->id, $req->type, $req->sunday, $req->sunday_radio, $req->sunday_start_time, $req->sunday_end_time);

            return redirect()->route('calendar')->with('success', 'Operating hours updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function operatingDay($id, $type, $week_day, $radio, $start, $end)
    {
        $day = new OperatingDay();
        $property = $type . '_id';
        $day->$property = $id;
        $day->week_day = $week_day;
        $day->save();
        $hour = new OperatingHour();
        $hour->operating_day_id = $day->id;
        $hour->radio = $radio;
        $hour->start_time = $start;
        $hour->end_time = $end;
        $hour->save();
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
                // Update the existing block time
                $existingBlockTime->update($data);
                $message = 'Block Time has been updated.';
            } else {
                // Create a new block time entry
                $blockTime = BlockTime::create($data);

                if (!$blockTime) {
                    return redirect()->back()->with('error', 'Block Time is not created.');
                }

                $message = 'Block Time has been created.';
            }

            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
