<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\CancellationPolicy;
use App\Models\CompanyPolicy;
use App\Models\Entertainment;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\ParkingOption;
use App\Models\SafetyMeasure;
use App\Models\Space;
use App\Models\SpaceActivity;
use App\Models\SpaceActivityAmenity;
use App\Models\SpaceHaveCompanyPolicy;
use App\Models\SpaceHavingActivity;
use App\Models\SpaceHavingMeasure;
use App\Models\SpaceImage;
use App\Models\SpaceType;
use App\Models\Age;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SpaceController extends UserBaseController
{
    public function addAddress(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postalCode' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $space = Space::create([
            'address' => $req->address,
            'country' => $req->country,
            'city' => $req->city,
            'state' => $req->state,
            'postal_code' => $req->postalCode,
            'user_id' => user_id(),
        ]);
        if (!$space) {
            return response()->json('error', 'Space is not created.');
        } else {
            return response()->json(['id' => $space->id], 200);
        }
    }

    public function updateAddress(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postalCode' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $space = Space::find($id);
        $space = Space::update([
            'address' => $req->address,
            'country' => $req->country,
            'city' => $req->city,
            'state' => $req->state,
            'postal_code' => $req->postalCode,
            'user_id' => user_id(),
        ]);
        if (!$space) {
            return response()->json('error', 'Space is not created.');
        } else {
            return response()->json(['id' => $space->id], 200);
        }
    }

    public function parkingStep($id)
    {
        $this->space = Space::find($id);
        $this->space_types = SpaceType::get();
        $this->parking_options = ParkingOption::get();
        return response()->json($this->data, 200);
    }
    public function addParking(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'spaceTypeId' => 'required',
            'parkingDescription' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $data = $req->except('_token');

        $space = Space::find($id);
        if (!$space) {
            return response()->json('error', 'Space not found.');
        }
        $space->update([
            'space_type_id' => $req->spaceTypeId,
            'parking_description' => $req->parkingDescription,
            'parking_option' => $req->parkingOption,
            'security_devices_description' => $req->securityDevicesDescription,
        ]);

        if (isset($data['parking_option']) && is_array($data['parking_option'])) {
            $newParkingOptions = $data['parking_option'];

            // Get the IDs of existing parking options associated with the space
            $existingParkingOptionIds = $space->spaceHaveParkingOptions->pluck('id')->toArray();

            // Add new parking options that are not already associated
            $optionsToAdd = array_diff($newParkingOptions, $existingParkingOptionIds);
            foreach ($optionsToAdd as $parking_option) {
                $space->spaceHaveParkingOptions()->attach($parking_option);
            }

            // Remove associations with parking options that are not selected anymore
            $optionsToRemove = array_diff($existingParkingOptionIds, $newParkingOptions);
            $space->spaceHaveParkingOptions()->detach($optionsToRemove);
        } else {
            // If no parking options selected, remove all associations
            $space->spaceHaveParkingOptions()->detach();
        }

        return response()->json(['id' => $space->id], 200);
    }

    public function aboutStep($id)
    {
        $this->space = Space::find($id);
        $this->ages = Age::get();
        return response()->json($this->data, 200);
    }

    public function addAbout(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'spaceTitle' => 'required',
            'spaceDescription' => 'required',
            'spaceSize' => 'required',
            'spaceRules' => 'required',
            'allowedAge' => 'required',
            'arrivalInstruction' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        try {
            $data = $req->except('_token');
            $space = Space::find($id);
            $data['allowed_age'] = json_encode($req->allowed_age);
            if (!$space) {
                return response()->json('error', 'Space not found.');
            }
            $space->update([
                'space_title' => $req->spaceTitle,
                'space_description' => $req->spaceDescription,
                'space_size' => $req->spaceSize,
                'space_rules' => $req->spaceRules,
                'allowed_age' => $req->allowedAge,
                'wifi_password' => $req->wifiPassword,
                'arrival_instruction' => $req->arrivalInstruction,
            ]);
            return response()->json(['id' => $id], 200);
        } catch (\Throwable $th) {
            return response()->json('error', $th->getMessage());
        }
    }

    public function imagesStep($id)
    {
        $images = Space::whereId($id)->whereUserId(user_id())->with('spaceImages')->get();
        foreach ($images as $img) {
            foreach ($img->spaceImages as $data) {
                Storage::disk('s3')->delete($data->image);
                $data->delete();
            }
        }
        $space = Space::find($id);
        return response()->json(['space' => $space]);
    }

    public function addImages(Request $req, $id)
    {
        $filename = '';
        $foldername = '';
        $image = '';
        if ($req->hasFile('file')) {
            $image = $req->file;
            $foldername = 'uploads/seller/spaces/';
            $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
            Storage::disk("s3")->putFileAs($foldername, $image, $filename);
        }

        Space::find($id)->update(["last_step" => '4']);
        SpaceImage::create([
            'space_id' => $id,
            'image' => $foldername . $filename,
        ]);
        return response()->json(['id' => $id], 200);
    }

    public function operatingHourStep($id)
    {
        $space = Space::find($id);
        return response()->json(['space' => $space]);
    }

    public function addOperatingHours(Request $req, $id)
    {
        $space = Space::find($id);
        if ($space) {
            $space->operatingDays()->delete();
        }
        $weekDay = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        $counts = [0, 1, 2, 3, 4];

        foreach ($weekDay as $weekDay) {
            if ($req->$weekDay == $weekDay) {
                $day = new OperatingDay();
                $day->space_id = $id;
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

        $space->update(["last_step" => '5']);
        return response()->json(['id' => $id]);
    }

    public function safetyMeasureStep($id)
    {
        $this->space = Space::find($id);
        $this->safety_measures = SafetyMeasure::get();
        return response()->json($this->data,200);
    }

    public function addSafetyMeasure(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'safetyMeasure' => 'required',
            'cleaningProcess' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
            $data = $req->except('_token');
            $space = Space::find($id);
            if (!$space) {
                return response()->json(['error' => true]);
            }
            $space->update(["last_step" => '6']);

            if (isset($data['safetyMeasure']) && isset($data['safetyMeasure'][0]) && $data['safetyMeasure'][0] !== null) {
                if ($space->spaceHaveMeasures) {
                    // Update existing Safety Measures
                    $existingSafetyMeasure = $space->spaceHaveMeasures;

                    // Remove any existing Safety Measures not present in the new data
                    $safetyMeasuresToKeep = array_intersect($existingSafetyMeasure->pluck('safety_measure_id')->toArray(), $data['safetyMeasure']);

                    // Delete any Safety Measures that are not in the list to keep
                    $existingSafetyMeasure->whereNotIn('safety_measure_id', $safetyMeasuresToKeep)->each(function ($safetyMeasure) {
                        $safetyMeasure->delete();
                    });

                    // Create new Safety Measures if not already associated
                    foreach ($data['safetyMeasure'] as $safety_measure) {
                        if (!$existingSafetyMeasure->contains('safety_measure_id', $safety_measure)) {
                            SpaceHavingMeasure::create([
                                'safety_measure_id' => $safety_measure,
                                'space_id' => $space->id,
                            ]);
                        }
                    }
                } else {
                    // Create new Safety Measures
                    foreach ($data['safetyMeasure'] as $safety_measure) {
                        SpaceHavingMeasure::create([
                            'safety_measure_id' => $safety_measure,
                            'space_id' => $space->id,
                        ]);
                    }
                }
            } else {
                // Remove parking options if toggle switch is off
                if ($space->spaceHaveMeasures) {
                    $space->spaceHaveMeasures->each(function ($safetyMeasure) {
                        $safetyMeasure->delete();
                    });
                }
            }

            return response()->json(['space_id' => $id]);
    }

    public function cancelPolicyStep($id)
    {
        $this->space = Space::find($id);
        $this->cancel_policies = CancellationPolicy::get();
        return response()->json($this->data, 200);
    }

    public function addCancelPolicy(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'cancellationPolicyId' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $data = $req->except('_token');
        $space = Space::find($id);
        if (!$space) {
            return redirect()->back()->with('error', 'Space not found.');
        }
        $space->update([
            'cancellation_policy_id'=>$req->cancellationPolicyId,
            'last_step'=>7,
        ]);

        return response()->json(['id' => $id, 'key' => 0]);
    }

    public function activitiesStep($id, $enable_req = null)
    {
        $this->space = Space::find($id);
        $this->space_activities = SpaceActivity::get();
        $this->enable_req = $enable_req;
        return response()->json($this->data, 200);
    }

    public function addActivities(Request $req, $id)
    {
        $data = $req->except('_token');
        $space = Space::find($id);
        if (!$space) {
            return response()->json('error', 'Space not found.');
        }
        $space->update(['last_step' => '8']);
        if (isset($data['enabledActivities'])) {
            $enabledActivityIds = $data['enabledActivities'];

            if ($space->spaceHaveActivities) {
                $space->spaceHaveActivities->each(function ($spaceHaveActivity) {
                    $spaceHaveActivity->delete();
                });
            }

            // Loop through the activities and merge enabled activity IDs
            foreach ($data['activities'] as $activityId => $activityData) {
                if (in_array($activityId, $enabledActivityIds)) {

                    $SpaceHavingActivity = new SpaceHavingActivity();
                    $SpaceHavingActivity->space_id = $id;
                    $SpaceHavingActivity->rate_per_hour = $activityData['ratePerHour'][0];
                    $SpaceHavingActivity->minimum_hour = $activityData['minimumHour'][0];
                    $SpaceHavingActivity->discount = $activityData['discount'][0];
                    $SpaceHavingActivity->space_activity_id = $activityData['spaceActivityId'][0];
                    $SpaceHavingActivity->instant_booking = $activityData['instantBooking'][0];
                    $SpaceHavingActivity->max_guests = $activityData['maxGuests'][0];
                    $SpaceHavingActivity->save();

                    if ($activityData['activityHaveAmenity'] && isset($activityData['activityHaveAmenity'][0])) {

                        foreach ($activityData['activityHaveAmenity'] as $activity_have_amenity) {
                            $SpaceActivityAmenity = new SpaceActivityAmenity();
                            $SpaceActivityAmenity->space_having_activity_id = $SpaceHavingActivity->id;
                            $SpaceActivityAmenity->space_amenity_id = $activity_have_amenity;
                            $SpaceActivityAmenity->save();
                        }
                    }
                }
            }
            if ($req->enbale_req == 1) {
                $space->update(['last_step' => '10', 'status' => '1']);
                return response()->json('success', 'Listing Updated Successfully.');
            }
            return response()->json(['id' => $id]);
        } else {
            return response()->json('error', 'Please select any activity.');
        }

        if ($req->enbale_req == '1') {
            $space->update(['last_step' => '10', 'status' => '1']);
            return response()->json('success', 'Listing Updated Successfully.');
        }

        return response()->json(['id' => $id]);
    }

    public function contactStep($id)
    {
        $space = Space::find($id);
        return response()->json(['space' => $space]);
    }

    public function addContactInfo(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'cUfname' => 'required',
            'cUlname' => 'required',
            'cUphone' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $data = $req->except('_token', 'c_u_img');
        $space = Space::find($id);
        if (!$space) {
            return redirect()->back()->with('error', 'Space not found.');
        }
        // Delete the existing image from the database and public folder if it exists
        if ($space->c_u_img) {
            $imagePath = public_path($space->c_u_img);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Remove the image path from the database
            $space->update(['c_u_img' => null]);
        }
        $space->update([
            'c_u_fname'=>$req->cUfname,
            'c_u_lname'=>$req->cUlname,
            'c_u_phone'=>$req->cUphone,
        ]);

        if (isset($req->cUimg)) {
            $image = $req->cUimg;
            $foldername = 'uploads/seller/spaces/contact_user/';
            $filename = time() . '-' . rand(00000, 99999) . '.' . $image->getClientOriginalExtension();
            Storage::disk("s3")->putFileAs($foldername, $image, $filename);
            $space->update(['c_u_img' => $foldername . $filename]);
        }

        $userHasSpaces = Space::whereUserId(auth()->user()->id)->whereLastStep('10')->exists();
        $userHasEnt = Entertainment::whereUserId(auth()->user()->id)->whereLastSteps('step-9')->exists();

        if ($userHasSpaces || $userHasEnt) {
            $space->update(['last_step' => '10', 'status' => '1']);
            return response()->json('success',200);
        } else {
            return response()->json(['id' => $id],200);
        }

        return response()->json(['id' => $id],200);
    }

    public function policiesStep($space_id)
    {
        $this->space = Space::find($space_id);
        $this->company_policies = CompanyPolicy::get();
        return response()->json($this->data);
    }

    public function addPolicies(Request $req, $space_id)
    {
        $validator = Validator::make($req->all(), [
            'companyPolicy' => 'required',
        ]);
         if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $data = $req->except('_token');

        $space = Space::find($space_id);
        if (!$space) {
            return response()->json('error',400);
        }
        $space->update([
            'last_step'=>'10',
            'status'=>1
        ]);

        if (isset($data['companyPolicy']) && isset($data['companyPolicy'][0]) && $data['companyPolicy'][0] !== null) {
            if ($space->spaceHavePolicies) {
                // Update existing Company Policies
                $existingPolicies = $space->spaceHavePolicies;

                // Remove any existing Company Policies not present in the new data
                $policiesToKeep = array_intersect($existingPolicies->pluck('company_policy_id')->toArray(), $data['companyPolicy']);

                // Delete any Company Policies that are not in the list to keep
                $existingPolicies->whereNotIn('company_policy_id', $policiesToKeep)->each(function ($companyPolicy) {
                    $companyPolicy->delete();
                });

                // Create new Company Policies if not already associated
                foreach ($data['companyPolicy'] as $company_policy) {
                    if (!$existingPolicies->contains('company_policy_id', $company_policy)) {
                        SpaceHaveCompanyPolicy::create([
                            'company_policy_id' => $company_policy,
                            'space_id' => $space->id,
                        ]);
                    }
                }
            } else {
                // Create new Company Policies
                foreach ($data['companyPolicy'] as $company_policy) {
                    SpaceHaveCompanyPolicy::create([
                        'company_policy_id' => $company_policy,
                        'space_id' => $space->id,
                    ]);
                }
            }
        } else {
            // Remove Company Policies if toggle switch is off
            if ($space->spaceHavePolicies) {
                $space->spaceHavePolicies->each(function ($companyPolicy) {
                    $companyPolicy->delete();
                });
            }
        }

        return response()->json(['success', 'Listing added successfully'],200);
    }

    public function destroy($id)
    {
        $space = Space::find($id);
        if (isset($space->spaceImages)) {
            foreach ($space->spaceImages as $space_image) {
                Storage::disk('s3')->delete($space_image->image);
            }
        }
        $space->delete();
        return response()->json(['success'=>'Listing Deleted Successfully'],200);
    }
}
