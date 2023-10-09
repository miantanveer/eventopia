<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Age;
use App\Models\CancellationPolicy;
use App\Models\CompanyReview;
use App\Models\EntActivity;
use App\Models\EntActivityAmenity;
use App\Models\Entertainment;
use App\Models\EntertainmentActivity;
use App\Models\EntertainmentImages;
use App\Models\EntertainmentType;
use App\Models\EntertainmentCategory;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EntertainmentController extends UserBaseController
{
    public function formStep1(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'comedian' => 'required',
            'houseRules' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = new Entertainment();
        $entertainment->user_id = user_id();
        $entertainment->comedian = $req->comedian;
        $entertainment->house_rules = $req->houseRules;
        $entertainment->last_steps = 'step-1';
        if ($req->has('recordings')) {
            $entertainment->recordings = $req->recordings;
        }

        $entertainment->save();
        return response()->json(['id'=>$entertainment->id],200);
    }

    public function loadFormStep1($id)
    {
        $entertainment = Entertainment::find($id);
        $ent_types = EntertainmentType::get();
        return response()->json(['entertainment' => $entertainment,'ent_types'=>$ent_types, 'id' => $id],200);
    }

    public function updateFormStep1(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'comedian' => 'required',
            'houseRules' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->user_id = user_id();
        $entertainment->comedian = $req->comedian;
        $entertainment->house_rules = $req->houseRules;
        $entertainment->last_steps = 'step-1';
        if ($req->has('recordings')) {
            $entertainment->recordings = $req->recordings;
        }

        $entertainment->save();
        return response()->json(['id'=>$id],200);
    }

    public function loadFormStep2($id)
    {
        $this->entertainment = Entertainment::find($id);
        $this->ages = Age::get();
        $this->categories = EntertainmentCategory::get();
        return response()->json($this->data,200);
    }

    public function FormStep2(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'space' => 'required',
            'age' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->title = $req->title;
        $entertainment->space = $req->space;
        $entertainment->age = json_encode($req->age);
        $entertainment->arrival = $req->arrival;
        $entertainment->last_steps = 'step-2';
        $entertainment->save();
        return response()->json(['id'=> $id],200);
    }

    public function loadFormStep3($id)
    {
        $entertainment = Entertainment::find($id);
        return response(['id' => $id, 'entertainment' => $entertainment],200);
    }

    public function FormStep3(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->address = $req->address;
        $entertainment->country = $req->country;
        $entertainment->city = $req->city;
        $entertainment->state = $req->state;
        $entertainment->postal_code = $req->postalCode;
        $entertainment->lng = $req->lng;
        $entertainment->lat = $req->lat;
        $entertainment->last_steps = 'step-3';
        $entertainment->save();
        return response()->json(['id' => $id],200);
    }

    public function loadFormStep4($id)
    {
        $entertainment = Entertainment::find($id);
        $images = Entertainment::whereId($id)->whereUserId(user_id())->with('entertainmentImages')->get();
        foreach ($images as $img) {
            foreach ($img->entertainmentImages as $data) {
                Storage::disk('s3')->delete($data->image);
                $data->delete();
            }
        }
        return response()->json(['id' => $id, 'entertainment' => $entertainment],200);
    }
    public function FormStep4(Request $req, $id)
    {
        $filename = '';
        $foldername = '';
        if ($req->hasFile('file')) {
            $image = $req->file;
            $foldername = 'uploads/seller/entertainment/';
            $filename = time() . '-' . $image->getClientOriginalName();
            Storage::disk("s3")->putFileAs($foldername, $image, $filename);
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
        return response()->json(['id' => $id],200);
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
            return response()->json(['id' => $id],200);
        } catch (\Throwable $th) {
            return response()->json('error', $th->getMessage(),400);
        }
    }

    public function loadFormStep6($id)
    {
        $entertainment = Entertainment::find($id);
        $cancellation = CancellationPolicy::get();
        return response()->json(['id' => $id, 'entertainment' => $entertainment, 'cancellation' => $cancellation],200);
    }

    public function FormStep6(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'cancellationPolicy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->cancellation_policy_id = $req->cancellationPolicy;
        $entertainment->last_steps = 'step-6';
        $entertainment->save();
        return response()->json(['id'=>$id],200);
    }

    public function loadFormStep7($id)
    {
        $this->ent_activity = EntActivity::with('subActivities', 'entAmenities')->get();
        $this->id = $id;
        return response()->json($this->data,200);
    }

    public function FormStep7(Request $req, $id)
    {
        try {
            $data = $req->except('_token');
            $ent = Entertainment::find($id);
            if (!$ent) {
                return response()->json(['error'=>'Space not found.'],200);
            }
            $ent->update(['last_steps' => 'step-7']);
            if (isset($data['enabledActivities'])) {
                $enabledActivityIds = $data['enabledActivities'];

                if ($ent->entHaveActivities) {
                    $ent->entHaveActivities->each(function ($entHaveActivity) {
                        $entHaveActivity->delete();
                    });
                }

                // Loop through the activities and merge enabled activity IDs
                foreach ($data['activities'] as $activityId => $activityData) {
                    if (in_array($activityId, $enabledActivityIds)) {
                        $ent_activity = new EntertainmentActivity();
                        $ent_activity->entertainment_id = $id;
                        $ent_activity->hourly_rate = $activityData['ratePerHour'][0];
                        $ent_activity->max_hours = $activityData['minimumHour'][0];
                        $ent_activity->discount = $activityData['discount'][0];
                        $ent_activity->ent_activity_id = $activityData['spaceActivityId'][0];
                        $ent_activity->join = $activityData['instantBooking'][0];
                        $ent_activity->guest_capacity = $activityData['maxGuests'][0];
                        $ent_activity->save();

                        if ($activityData['activityHaveAmenity'] && isset($activityData['activityHaveAmenity'][0])) {

                            foreach ($activityData['activityHaveAmenity'] as $activity_have_amenity) {
                                $entActivityAmenity = new EntActivityAmenity();
                                $entActivityAmenity->entertainment_activity_id = $ent_activity->id;
                                $entActivityAmenity->ent_amenity_id = $activity_have_amenity;
                                $entActivityAmenity->save();
                            }
                        }
                    }
                }
                return response()->json(['id'=>$id],200);
            } else {
                return response()->json(['error'=>'Please select any activity.'],400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()],400);
        }
    }

    public function loadFormStep8($id)
    {
        $entertainment = Entertainment::find($id);
        return response()->json(['id' => $id, 'entertainment' => $entertainment],200);
    }

    public function FormStep8(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'contactFirstName' => 'required',
            'contactLastName' => 'required',
            'contactNum' => 'required',
            'eventopiaHear' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $filename = '';
        $foldername = '';
        if ($req->hasFile('image')) {
            $image = $req->image;
            $foldername = 'uploads/seller/entertainment/team';
            $filename = time() . '-' . $image->getClientOriginalName();
            Storage::disk("s3")->putFileAs($foldername, $image, $filename);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->contact_first_name = $req->contactFirstName;
        $entertainment->contact_last_name = $req->contactLastName;
        $entertainment->contact_num = $req->contactNum;
        $entertainment->eventopia_hear = $req->eventopiaHear;
        $entertainment->image = $foldername . $filename;
        $entertainment->last_steps = 'step-8';
        $entertainment->save();
        return response()->json(['id'=> $id],200);
    }

    public function loadFormStep9($id)
    {
        $userHasEnt = Entertainment::whereUserId(auth()->user()->id)->whereLastSteps('step-9')->exists();
        $userHasSpaces = Space::whereUserId(auth()->user()->id)->whereLastStep('10')->exists();

        if ($userHasEnt || $userHasSpaces) {
            $entertainment = Entertainment::find($id);
            $entertainment->last_steps = 'step-9';
            $entertainment->save();
            return response()->json(['id' => $id],200);
        } else {
            $entertainment = Entertainment::find($id);
            return response()->json(['id' => $id, 'entertainment' => $entertainment],200);
        }
    }

    public function FormStep9(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'onCompany' => 'required',
            'companyPayment' => 'required',
            'bookingAndCancellation' => 'required',
            'localRegulatioins' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $entertainment = Entertainment::find($id);
        $entertainment->last_steps = 'step-9';
        $entertainment->save();
        $company_review = new CompanyReview();
        $company_review->user_id = user_id();
        $company_review->keep_on_company = $req->onCompany;
        $company_review->use_company_for_payments = $req->companyPayment;
        $company_review->booking_and_cancellation = $req->bookingAndCancellation;
        $company_review->space_local_regulations = $req->localRegulatioins;
        $company_review->save();
        return response()->json(['id' => $id],200);
    }

    public function destroy($id)
    {
        $entertainment = Entertainment::whereUserId(user_id())->find($id);
        $pre_image = EntertainmentImages::whereEntertainmentId($id)->exists();
        if ($pre_image) {
            $delete_img = EntertainmentImages::whereEntertainmentId($id)->get();
            if (isset($delete_img)) {
                foreach ($delete_img as $key => $data) {
                    Storage::disk('s3')->delete($data->image);
                }
            }
        }
        $entertainment->delete();
        return response()->json(['success'=>'Entertainment Deleted Successfully'],200);
    }

}
