<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Age;
use App\Models\CancellationPolicy;
use App\Models\CompanyReview;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\EntertainmentImages;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\EntActivity;
use App\Models\EntActivityAmenity;
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
        $entertainment->age = $req->age;
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
    public function FormStep3(Request $req,$id)
    {
        $req->validate([
            'address'=>'required',
            'country'=>'required',
            'city'=>'required',
            'state'=>'required',
            'postal_code'=>'required'
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
        return redirect()->route('load_entertainment_form_4',['id'=>$id]);

    } 
    public function loadFormStep4($id)
    {
        $entertainment = Entertainment::find($id);
        return view('content\seller\entertainment\create\form-step-4', ['id' => $id, 'entertainment' => $entertainment]);
    }

    public function FormStep4(Request $req, $id)
    {
        // $pre_image = EntertainmentImages::whereEntertainmentId($id)->exists();
        // if($pre_image){
        //     $delete_img = EntertainmentImages::whereEntertainmentId($id)->first();
        //     if ($delete_img) {
        //             $file_path = public_path('/uploads/seller/entertainment/') . $delete_img->image;
        //             if (file_exists($file_path)) {
        //                 unlink($file_path);
        //                 $data->delete();
        //             }
        //     }
        // }
        // else{
        $filename = '';
        if ($req->hasFile('file')) {
            $image = $req->file;
            $foldername = '/uploads/seller/entertainment/';
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/entertainment/'), $filename);
        }
        $image = new EntertainmentImages();
        $image->entertainment_id = $id;
        $image->image = $foldername.$filename;
        $image->save();
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-4';
        $entertainment->save();
        return response()->json($image);
        // }
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
                $entertainment->operatingDays()->delete(); // Assuming you have a relationship method named operatingDays
            }
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
        $entertainment->cancellation_policy = $req->cancellation_policy;
        $entertainment->last_steps = 'step-6';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_7', $id);
    }
    public function loadFormStep7($id)
    {
        $this->ent_activity = EntActivity::with('subActivities','entAmenities')->get();
        $this->id = $id;
        return view('content\seller\entertainment\create\form-step-7', $this->data);
    }
    public function loadUpdateFormStep7($id, $key)
    {
        $this->musical = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->entertainers = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->event = EntertainmentActivity::whereEntertainmentId($id)->first();
        $this->ent_activity = EntActivity::with('subActivities','entAmenities')->get();
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
                        $ent_activity->join	 = $activityData['instant_booking'][0];
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
                        $ent_activity->join	 = $activityData['instant_booking'][0];
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
                return redirect()->route('my-listing')->with('success','Entertainment Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Please select any activity.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->route('my-listing')->with('success','Entertainment Updated Successfully');
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
        $entertainment->image = $foldername.$filename;
        $entertainment->last_steps = 'step-8';
        $entertainment->save();
        return redirect()->route('load_entertainment_form_9', $id);
    }
    public function loadFormStep9($id)
    {
        $review = CompanyReview::whereUserId(auth()->user()->id)->exists();
        if ($review) {
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
        return redirect()->route('my-listing')->with('success','Entertainment Deleted Successfully');
    }
}
