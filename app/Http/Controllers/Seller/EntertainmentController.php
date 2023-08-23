<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\EntertainmentActivities;
use App\Models\EntertainmentImages;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\CompanyReview;
use App\Models\CancellationPolicy;
use Illuminate\Http\Request;

class EntertainmentController extends UserBaseController
{
    public function formStep1(Request $req)
    {
        $req->validate([
            'comedian' => 'required',
            'house_rules' => 'required',
        ]);
        $entertainment = new Entertainment();
        $entertainment->user_id = auth()->user()->id;
        $entertainment->comedian = $req->comedian;
        $entertainment->house_rules = $req->house_rules;
        $entertainment->last_steps = 'step-1';
        if ($req->has('recordings')) {
            $entertainment->recordings = $req->recordings;
        }

        $entertainment->save();
        return redirect()->route('load_entertainment_form_2', $entertainment->id);
    }
    public function loadFormStep1($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-1', ['entertainment' => $entertainment, 'id' => $id]);
    }
    public function updateFormStep1(Request $req, $id)
    {
        $req->validate([
            'comedian' => 'required',
            'house_rules' => 'required',
        ]);
        $entertainment = Entertainment::find($id);
        $entertainment->user_id = auth()->user()->id;
        $entertainment->comedian = $req->comedian;
        $entertainment->house_rules = $req->house_rules;
        $entertainment->last_steps = 'step-1';
        if ($req->has('recordings')) {
            $entertainment->recordings = $req->recordings;
        }

        $entertainment->save();
        return redirect()->route('load_entertainment_form_2', $id);
    }
    public function loadFormStep2($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-2', ['id' => $id, 'entertainment' => $entertainment]);
    }
    public function FormStep2(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'space' => 'required',
            'age' => 'required',
        ]);
        $entertainment = Entertainment::find($id);
        $entertainment->title = $req->title;
        $entertainment->space = $req->space;
        $entertainment->age = $req->age;
        $entertainment->arrival = $req->arrival;
        $entertainment->last_steps = 'step-3';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_3', $id);
    }
    public function loadFormStep3($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-3', ['id' => $id, 'entertainment' => $entertainment]);
    }
    public function FormStep3(Request $req, $id)
    {
        $filename = '';
        if ($req->hasFile('file')) {
            $image = $req->file;
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/entertainment/'), $filename);
        }
        $image = new EntertainmentImages();
        $image->entertainment_id = $id;
        $image->image = $filename;
        $image->save();
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-3';
        $entertainment->save();
        return response()->json($image);
    }
    public function loadFormStep4($id)
    {
        return view('content\seller\entertainment\create\form-step-4', ['id' => $id]);
    }
    public function FormStep4(Request $req, $id)
    {
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-4';
        $entertainment->save();
        if ($req->has('monday')) {
            $this->operatingDay($id, $req->monday, $req->monday_radio, $req->monday_start_time, $req->monday_end_time);
        }

        if ($req->has('tuesday')) {
            $this->operatingDay($id, $req->tuesday, $req->tuesday_radio, $req->tuesday_start_time, $req->tuesday_end_time);
        }

        if ($req->has('wednesday')) {
            $this->operatingDay($id, $req->wednesday, $req->wednesday_radio, $req->wednesday_start_time, $req->wednesday_end_time);
        }

        if ($req->has('thursday')) {
            $this->operatingDay($id, $req->thursday, $req->thursday_radio, $req->thursday_start_time, $req->thursday_end_time);
        }

        if ($req->has('friday')) {
            $this->operatingDay($id, $req->friday, $req->friday_radio, $req->friday_start_time, $req->friday_end_time);
        }

        if ($req->has('saturday')) {
            $this->operatingDay($id, $req->saturday, $req->saturday_radio, $req->saturday_start_time, $req->saturday_end_time);
        }

        if ($req->has('sunday')) {
            $this->operatingDay($id, $req->sunday, $req->sunday_radio, $req->sunday_start_time, $req->sunday_end_time);
        }

        return redirect()->route('load_entertainment_form_5', ['id' => $id]);
    }
    public function loadFormStep5($id)
    {
        $entertainment = Entertainment::find($id);
        $cancellation = CancellationPolicy::get();
        return view('content\seller\entertainment\create\form-step-5', ['id' => $id,'entertainment' => $entertainment,'cancellation' => $cancellation]);
    }
    public function FormStep5(Request $req, $id)
    {
        $req->validate([
            'cancellation_policy' => 'required',
        ]);
        $entertainment = Entertainment::find($id);
        $entertainment->cancellation_policy = $req->cancellation_policy;
        $entertainment->save();
        return redirect()->route('load_entertainment_form_6', $id);
    }
    public function loadFormStep6($id)
    {
        $musical = EntertainmentActivities::whereEntertainmentId($id)->whereType('musical')->first();
        $entertainers = EntertainmentActivities::whereEntertainmentId($id)->whereType('entertainers')->first();
        $event = EntertainmentActivities::whereEntertainmentId($id)->whereType('event')->first();
        return view('content\seller\entertainment\create\form-step-6', ['id' => $id, 'musical' => $musical,'entertainers' => $entertainers,'event' => $event,]);
    }
    public function FormStep6(Request $req, $id)
    {
        if ($req->musical_hourly_rate !== null) {
            $req->validate([
                'musical_hourly_rate' => 'required',
                'musical_max_hours' => 'required',
                'musical_join' => 'required',
                'musical_guest_capacity' => 'required',
            ]);
            $this->activities($id, $req->musical_hourly_rate, $req->musical_max_hours, $req->musical_discount, $req->musical_join, $req->musical_guest_capacity,'musical');
        }
        if ($req->entertainers_hourly_rate !== null) {
            $req->validate([
                'entertainers_hourly_rate' => 'required',
                'entertainers_max_hours' => 'required',
                'entertainers_join' => 'required',
                'entertainers_gust_capacity' => 'required',
            ]);
            $this->activities($id, $req->entertainers_hourly_rate, $req->entertainers_max_hours, $req->entertainers_discount,$req->entertainers_join, $req->entertainers_guest_capacity,'entertainers');
        }

        if ($req->event_hourly_rate !== null) {
            $req->validate([
                'event_hourly_rate' => 'required',
                'event_max_hours' => 'required',
                'event_join' => 'required',
                'event_guest_capacity' => 'required',
            ]);
            $this->activities($id, $req->event_hourly_rate, $req->event_max_hours, $req->event_discount,$req->event_join, $req->event_guest_capacity,'event');
        }

        return redirect()->route('load_entertainment_form_7', $id);
    }
    public function loadFormStep7($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-7', ['id' => $id, 'entertainment' => $entertainment]);
    }
    public function FormStep7(Request $req, $id)
    {
        $req->validate([
            'contact_first_name'=>'required',
            'contact_last_name'=>'required',
            'contact_num'=>'required',
            'image'=>'required',
            'eventopia_hear'=>'required',
        ]);
        $filename = '';
        if ($req->hasFile('image')) {
            $image = $req->image;
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/entertainment/'), $filename);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->contact_first_name = $req->contact_first_name;
        $entertainment->contact_last_name = $req->contact_last_name;
        $entertainment->contact_num = $req->contact_num;
        $entertainment->image = $filename;
        $entertainment->save();
        return redirect()->route('load_entertainment_form_8',$id);
    }
    public function loadFormStep8($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-8', ['id' => $id, 'entertainment' => $entertainment]);
    }
    public function FormStep8($id)
    {
        $review = CompanyReview::whereUserId(auth()->user()->id)->exists();
        if($review){
            return view('content\seller\entertainment\create\form-step-9', ['id' => $id]);
        }
        else{
            $company_review = new CompanyReview();
            $company_review->user_id = auth()->user()->id; 
            $company_review->keep_on_company = $req->on_company; 
            $company_review->use_company_for_payments = $req->company_payment; 
            $company_review->booking_and_cancellation = $req->booking_and_cancellation; 
            $company_review->space_local_regulations = $req->local_regulatioins;
            $company_review->save(); 
            return view('content\seller\entertainment\create\form-step-9', ['id' => $id]);
        }
    }
    public function operatingDay($id, $week_day, $radio, $start, $end)
    {
        $day = new OperatingDay();
        $day->entertainment_id = $id;
        $day->week_day = $week_day;
        $day->save();
        $hour = new OperatingHour();
        $hour->operating_day_id = $day->id;
        $hour->radio = $radio;
        $hour->start_time = $start;
        $hour->end_time = $end;
        $hour->save();
    }
    public function activities($id, $hour, $max, $discount, $join, $guest,$type)
    {
        $activity = new EntertainmentActivities();
        $activity->entertainment_id = $id;
        $activity->hourly_rate = $hour;
        $activity->max_hours = $max;
        $activity->discount = $discount;
        $activity->join = $join;
        $activity->guest_capacity = $guest;
        $activity->type = $type;
        $activity->save();
    }

}
