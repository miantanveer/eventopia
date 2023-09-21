<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Age;
use App\Models\CancellationPolicy;
use App\Models\CompanyReview;
use App\Models\EntActivity;
use App\Models\EntActivityAmenity;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\EntertainmentImages;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntertainmentController extends UserBaseController
{
    public function listEntertainment()
    {
        if (Auth::check()) {
            return view('content.seller.list-entertainment');
        }

        return view('content.seller.add-entertainment');
    }

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
        $age = Age::get();
        return view('content\seller\entertainment\create\form-step-2', ['id' => $id, 'entertainment' => $entertainment, 'age' => $age]);
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
        $entertainment->age = json_encode($req->age);
        $entertainment->arrival = $req->arrival;
        $entertainment->last_steps = 'step-2';
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
        $req->validate([
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);
        $entertainment = Entertainment::find($id);
        $entertainment->address = $req->address;
        $entertainment->country = $req->country;
        $entertainment->city = $req->city;
        $entertainment->state = $req->state;
        $entertainment->postal_code = $req->postal_code;
        $entertainment->lng = $req->lng;
        $entertainment->lat = $req->lat;
        $entertainment->last_steps = 'step-3';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_4', ['id' => $id]);
    }
    public function loadFormStep4($id)
    {
        $entertainment = Entertainment::find($id);
        $images = Entertainment::whereId($id)->whereUserId(user_id())->with('entertainmentImages')->get();
        foreach ($images as $img) {
            foreach ($img->entertainmentImages as $data) {
                $file_path = public_path($data->image);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $data->delete();
            }
        }
        return view('content\seller\entertainment\create\form-step-4', ['id' => $id, 'entertainment' => $entertainment]);
    }

    public function FormStep4(Request $req, $id)
    {
        $filename = '';
        if ($req->hasFile('file')) {
            $image = $req->file;
            $foldername = '/uploads/seller/entertainment/';
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/entertainment/'), $filename);
        }
        $image = new EntertainmentImages();
        $image->entertainment_id = $id;
        $image->image = $foldername . $filename;
        $image->save();
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-4';
        $entertainment->save();
        return response()->json($image);
    }
    public function loadFormStep5($id)
    {
        return view('content\seller\entertainment\create\form-step-5', ['id' => $id]);
    }
    public function FormStep5(Request $req, $id)
    {
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-5';
        $entertainment->save();
        try {
            $entertainment = Entertainment::find($id);
            if ($entertainment) {
                $entertainment->operatingDays()->delete();
            }
            $weekDay = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
            $counts = [0, 1, 2, 3, 4];
            foreach ($weekDay as $weekDay) {
                if ($req->$weekDay == $weekDay) {
                    $day = new OperatingDay();
                    $day->entertainment_id = $id;
                    $day->week_day = $weekDay;
                    $day->save();

                    $week_day = $weekDay . '_radio';

                    if ($req->$week_day == 0) {
                        $hour = new OperatingHour();
                        $hour->operating_day_id = $day->id;
                        $hour->radio = $req->$week_day;
                        $hour->start_time = '6 AM';
                        $hour->end_time = '12 AM';
                        $hour->save();
                    } else {
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
                }
            }
            return redirect()->route('load_entertainment_form_6', ['id' => $id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function loadFormStep6($id)
    {
        $entertainment = Entertainment::find($id);
        $cancellation = CancellationPolicy::get();
        return view('content\seller\entertainment\create\form-step-6', ['id' => $id, 'entertainment' => $entertainment, 'cancellation' => $cancellation]);
    }
    public function FormStep6(Request $req, $id)
    {
        $req->validate([
            'cancellation_policy' => 'required',
        ]);
        $entertainment = Entertainment::find($id);
        $entertainment->cancellation_policy_id = $req->cancellation_policy;
        $entertainment->last_steps = 'step-6';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_7', $id);
    }
    public function loadFormStep7($id)
    {
        $this->ent_activity = EntActivity::with('subActivities', 'entAmenities')->get();
        $this->id = $id;
        return view('content\seller\entertainment\create\form-step-7', $this->data);
    }
    public function loadUpdateFormStep7($id, $key)
    {
        $this->musical = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->entertainers = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->event = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->ent_activity = EntActivity::with('subActivities', 'entAmenities')->get();
        $this->id = $id;
        $this->key = $key;
        return view('content\seller\entertainment\create\form-step-7', $this->data);
    }
    public function FormStep7(Request $req, $id)
    {
        try {
            $data = $req->except('_token');
            $space = Entertainment::find($id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update(['last_steps' => 'step-7']);
            if (isset($data['enabled_activities'])) {
                $enabledActivityIds = $data['enabled_activities'];

                if ($space->entHaveActivities) {
                    $space->entHaveActivities->each(function ($entHaveActivity) {
                        $entHaveActivity->delete();
                    });
                }

                // Loop through the activities and merge enabled activity IDs
                foreach ($data['activities'] as $activityId => $activityData) {
                    if (in_array($activityId, $enabledActivityIds)) {

                        $ent_activity = new EntertainmentActivity();
                        $ent_activity->entertainment_id = $id;
                        $ent_activity->hourly_rate = $activityData['rate_per_hour'][0];
                        $ent_activity->max_hours = $activityData['minimum_hour'][0];
                        $ent_activity->discount = $activityData['discount'][0];
                        $ent_activity->ent_activity_id = $activityData['space_activity_id'][0];
                        $ent_activity->join = $activityData['instant_booking'][0];
                        $ent_activity->guest_capacity = $activityData['max_guests'][0];
                        $ent_activity->save();

                        if ($activityData['activity_have_amenity'] && isset($activityData['activity_have_amenity'][0])) {

                            foreach ($activityData['activity_have_amenity'] as $activity_have_amenity) {
                                $SpaceActivityAmenity = new EntActivityAmenity();
                                $SpaceActivityAmenity->entertainment_activity_id = $ent_activity->id;
                                $SpaceActivityAmenity->ent_amenity_id = $activity_have_amenity;
                                $SpaceActivityAmenity->save();
                            }
                        }
                    }
                }
                return redirect()->route('load_entertainment_form_8', $id);
            } else {
                return redirect()->back()->with('error', 'Please select any activity.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->route('load_entertainment_form_8', $id);
    }
    public function UpdateFormStep7(Request $req, $id)
    {
        try {
            $data = $req->except('_token');
            $space = Entertainment::find($id);
            if (!$space) {
                return redirect()->back()->with('error', 'Entertainment not found.');
            }
            $space->update(['last_steps' => 'step-9']);
            if (isset($data['enabled_activities'])) {
                $enabledActivityIds = $data['enabled_activities'];

                if ($space->entHaveActivities) {
                    $space->entHaveActivities->each(function ($entHaveActivity) {
                        $entHaveActivity->delete();
                    });
                }

                // Loop through the activities and merge enabled activity IDs
                foreach ($data['activities'] as $activityId => $activityData) {
                    if (in_array($activityId, $enabledActivityIds)) {

                        $ent_activity = new EntertainmentActivity();
                        $ent_activity->entertainment_id = $id;
                        $ent_activity->hourly_rate = $activityData['rate_per_hour'][0];
                        $ent_activity->max_hours = $activityData['minimum_hour'][0];
                        $ent_activity->discount = $activityData['discount'][0];
                        $ent_activity->ent_activity_id = $activityData['space_activity_id'][0];
                        $ent_activity->join = $activityData['instant_booking'][0];
                        $ent_activity->guest_capacity = $activityData['max_guests'][0];
                        $ent_activity->save();
                        $ent = Entertainment::find($id);
                        $ent->ent_activity_id = $activityData['space_activity_id'][0];
                        $ent->save();
                        if ($activityData['activity_have_amenity'] && isset($activityData['activity_have_amenity'][0])) {

                            foreach ($activityData['activity_have_amenity'] as $activity_have_amenity) {
                                $SpaceActivityAmenity = new EntActivityAmenity();
                                $SpaceActivityAmenity->entertainment_activity_id = $ent_activity->id;
                                $SpaceActivityAmenity->ent_amenity_id = $activity_have_amenity;
                                $SpaceActivityAmenity->save();
                            }
                        }
                    }
                }
                return redirect()->route('my-listing')->with('success', 'Entertainment Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Please select any activity.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->route('my-listing')->with('success', 'Entertainment Updated Successfully');
    }
    public function loadFormStep8($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-8', ['id' => $id, 'entertainment' => $entertainment]);
    }
    public function FormStep8(Request $req, $id)
    {
        $req->validate([
            'contact_first_name' => 'required',
            'contact_last_name' => 'required',
            'contact_num' => 'required',
            'image' => 'required',
            'eventopia_hear' => 'required',
        ]);
        $filename = '';
        $foldername = '';
        if ($req->hasFile('image')) {
            $image = $req->image;
            $foldername = '/uploads/seller/entertainment/team';
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/entertainment/team'), $filename);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->contact_first_name = $req->contact_first_name;
        $entertainment->contact_last_name = $req->contact_last_name;
        $entertainment->contact_num = $req->contact_num;
        $entertainment->image = $foldername . $filename;
        $entertainment->last_steps = 'step-8';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_9', $id);
    }
    public function loadFormStep9($id)
    {
        $userHasEnt = Entertainment::whereUserId(auth()->user()->id)->whereLastSteps('step-9')->exists();
        $userHasSpaces = Space::whereUserId(auth()->user()->id)->whereLastStep('10')->exists();

        if ($userHasEnt || $userHasSpaces) {
            $entertainment = Entertainment::find($id);
            $entertainment->last_steps = 'step-9';
            $entertainment->save();
            return view('content\seller\entertainment\create\form-step-10', ['id' => $id]);
        } else {
            $entertainment = Entertainment::find($id);
            return view('content\seller\entertainment\create\form-step-9', ['id' => $id, 'entertainment' => $entertainment]);
        }
    }
    public function FormStep9(Request $req, $id)
    {

        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-9';
        $entertainment->save();
        $company_review = new CompanyReview();
        $company_review->user_id = auth()->user()->id;
        $company_review->keep_on_company = $req->on_company;
        $company_review->use_company_for_payments = $req->company_payment;
        $company_review->booking_and_cancellation = $req->booking_and_cancellation;
        $company_review->space_local_regulations = $req->local_regulatioins;
        $company_review->save();
        return view('content\seller\entertainment\create\form-step-10', ['id' => $id]);
    }

    public function resumeForm($id)
    {
        $entertainment = Entertainment::find($id);
        switch ($entertainment->last_steps) {
            case 'step-1':
                return redirect()->route('load_entertainment_form_2', ['id' => $id]);
                break;
            case 'step-2':
                return redirect()->route('load_entertainment_form_3', ['id' => $id]);
                break;
            case 'step-3':
                return redirect()->route('load_entertainment_form_4', ['id' => $id]);
                break;
            case 'step-4':
                return redirect()->route('load_entertainment_form_5', ['id' => $id]);
                break;
            case 'step-5':
                return redirect()->route('load_entertainment_form_6', ['id' => $id]);
                break;
            case 'step-6':
                return redirect()->route('load_entertainment_form_7', ['id' => $id]);
                break;
            case 'step-7':
                return redirect()->route('load_entertainment_form_8', ['id' => $id]);
                break;
            case 'step-8':
                return redirect()->route('load_entertainment_form_9', ['id' => $id]);
                break;
        }
    }
    public function destroy($id)
    {
        $entertainment = Entertainment::find($id);
        $pre_image = EntertainmentImages::whereEntertainmentId($id)->exists();
        if ($pre_image) {
            $delete_img = EntertainmentImages::whereEntertainmentId($id)->get();
            if (isset($delete_img)) {
                foreach ($delete_img as $key => $data) {
                    $file_path = public_path('/uploads/seller/entertainment/') . $data->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                        $data->delete();
                    }
                }
            }
        }
        $entertainment->delete();
        return redirect()->route('my-listing')->with('success', 'Entertainment Deleted Successfully');
    }
}
