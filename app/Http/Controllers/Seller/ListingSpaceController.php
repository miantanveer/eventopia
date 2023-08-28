<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\CancellationPolicy;
use App\Models\CompanyPolicy;
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
use App\Models\SpaceHavingParkingOption;
use App\Models\SpaceImage;
use App\Models\SpaceType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ListingSpaceController extends UserBaseController
{
    public function listSpace()
    {
        return view('content.seller.list-space');
    }

    public function addSpaceForm()
    {
        return view('content.seller.space.address-step');
    }


    public function addAddress(Request $req)
    {
        $req->validate([
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
        ]);
        try {
            $data = $req->except('_token');

            $data['user_id'] = auth()->user()->id;
            $space = Space::create($data);
            if (!$space) {
                return redirect()->back()->with('error', 'Space is not created.');
            }

            return redirect()->route('parking-step', ['space_id' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function editSpaceAddress($space_id)
    {
        $space = Space::find($space_id);
        return view('content.seller.space.address-step', ['space' => $space]);
    }

    public function updateSpaceAddress(Request $req, $space_id)
    {
        try {
            $data = $req->except('_token');

            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);
            return redirect()->route('parking-step', ['space_id' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function parkingStep($space_id)
    {
        try {
            $this->space = Space::find($space_id);
            $this->space_types = SpaceType::get();
            $this->parking_options = ParkingOption::get();
            return view('content.seller.space.parking-step', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addParking(Request $req, $space_id)
    {
        $req->validate([
            'space_type_id'=>'required',
            'parking_option'=>'required',
            'parking_description'=>'required|min:35',
        ]);
        try {
            $data = $req->except('_token');

            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

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

            return redirect()->route('about-step', ['space_id' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function aboutStep($space_id)
    {
        $space = Space::find($space_id);
        return view('content.seller.space.about-step', ['space' => $space]);
    }

    public function addAbout(Request $req, $space_id)
    {
        $req->validate([
            'space_title'=>'required',
            'space_description'=>'required',
            'space_size'=>'required',
            'space_rules'=>'required',
            'allowed_age'=>'required',
            'arrival_instruction'=>'required',
        ]);
        try {
            $data = $req->except('_token');
            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);
            return redirect()->route('images-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function imagesStep($space_id)
    {
        $space = Space::find($space_id);
        return view('content.seller.space.images-step', ['space' => $space]);
    }

    public function addImages(Request $req, $space_id)
    {
        try {
            $filename = '';
            if ($req->hasFile('file')) {
                $image = $req->file;
                $foldername = '/uploads/seller/spaces/';
                $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
                $image->move(public_path() . $foldername, $filename);
            }

            Space::find($space_id)->update(["last_step" => '4']);
            // if ($space->spaceImages) {
            //     foreach ($space->spaceImages as $existingImage) {
            //         // Delete image file from storage
            //         $imagePath = public_path() . $existingImage->image;
            //         if (file_exists($imagePath)) {
            //             unlink($imagePath);
            //         }
            //         // Storage::delete($existingImage->image);

            //         // Delete image record from database
            //         $existingImage->delete();
            //     }
            // }
            SpaceImage::create([
                'space_id' => $space_id,
                'image' =>  $foldername . $filename,
            ]);

            return response()->json($image);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function operatingHourStep($space_id)
    {
        $space = Space::find($space_id);
        return view('content.seller.space.operating-hours-step', ['space' => $space]);
    }

    public function addaddOperatingHours(Request $req, $space_id)
    {
        try {
            $space = Space::find($space_id);
            if ($space) {
                $space->operatingDays()->delete(); // Assuming you have a relationship method named operatingDays
            }

            if ($req->has('monday')) $this->operatingDay($space_id, $req->monday, $req->monday_radio, $req->monday_start_time, $req->monday_end_time);
            if ($req->has('tuesday')) $this->operatingDay($space_id, $req->tuesday, $req->tuesday_radio, $req->tuesday_start_time, $req->tuesday_end_time);
            if ($req->has('wednesday')) $this->operatingDay($space_id, $req->wednesday, $req->wednesday_radio, $req->wednesday_start_time, $req->wednesday_end_time);
            if ($req->has('thursday')) $this->operatingDay($space_id, $req->thursday, $req->thursday_radio, $req->thursday_start_time, $req->thursday_end_time);
            if ($req->has('friday')) $this->operatingDay($space_id, $req->friday, $req->friday_radio, $req->friday_start_time, $req->friday_end_time);
            if ($req->has('saturday')) $this->operatingDay($space_id, $req->saturday, $req->saturday_radio, $req->saturday_start_time, $req->saturday_end_time);
            if ($req->has('sunday')) $this->operatingDay($space_id, $req->sunday, $req->sunday_radio, $req->sunday_start_time, $req->sunday_end_time);

            $space->update(["last_step" => '5']);
            return redirect()->route('safety-measure-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function operatingDay($space_id, $week_day, $radio, $start, $end)
    {
        $day = new OperatingDay();
        $day->space_id = $space_id;
        $day->week_day = $week_day;
        $day->save();
        $hour = new OperatingHour();
        $hour->operating_day_id = $day->id;
        $hour->radio = $radio;
        $hour->start_time = $start;
        $hour->end_time = $end;
        $hour->save();
    }

    public function safetyMeasureStep($space_id)
    {
        $this->space = Space::find($space_id);
        $this->safety_measures = SafetyMeasure::get();
        return view('content.seller.space.safety-measure-step', $this->data);
    }

    public function addSafetyMeasure(Request $req, $space_id)
    {
        $req->validate([
            'safety_measure'=>'required',
            'cleaning_process'=>'required',
        ]);
        try {
            $data = $req->except('_token');
            $space = Space::find($space_id);
            if (!$space) {
                return response()->json(['error' => true]);
            }
            $space->update($data);

            if (isset($data['safety_measure']) && isset($data['safety_measure'][0]) && $data['safety_measure'][0] !== null) {
                if ($space->spaceHaveMeasures) {
                    // Update existing Safety Measures
                    $existingSafetyMeasure = $space->spaceHaveMeasures;

                    // Remove any existing Safety Measures not present in the new data
                    $safetyMeasuresToKeep = array_intersect($existingSafetyMeasure->pluck('safety_measure_id')->toArray(), $data['safety_measure']);

                    // Delete any Safety Measures that are not in the list to keep
                    $existingSafetyMeasure->whereNotIn('safety_measure_id', $safetyMeasuresToKeep)->each(function ($safetyMeasure) {
                        $safetyMeasure->delete();
                    });

                    // Create new Safety Measures if not already associated
                    foreach ($data['safety_measure'] as $safety_measure) {
                        if (!$existingSafetyMeasure->contains('safety_measure_id', $safety_measure)) {
                            SpaceHavingMeasure::create([
                                'safety_measure_id' => $safety_measure,
                                'space_id' => $space->id
                            ]);
                        }
                    }
                } else {
                    // Create new Safety Measures
                    foreach ($data['safety_measure'] as $safety_measure) {
                        SpaceHavingMeasure::create([
                            'safety_measure_id' => $safety_measure,
                            'space_id' => $space->id
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

            return redirect()->route('cancel-policy-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function cancelPolicyStep($space_id)
    {
        $this->space = Space::find($space_id);
        $this->cancel_policies = CancellationPolicy::get();
        return view('content.seller.space.cancel-policy-step', $this->data);
    }

    public function addCancelPolicy(Request $req, $space_id)
    {
        $req->validate([
            'cancellation_policy_id'=>'required'
        ]);

        try {
            $data = $req->except('_token');
            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

            return redirect()->route('activities-step', ['space_id' => $space_id , 'key' => 0]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function activitiesStep($space_id, $enable_req = null)
    {
        $this->space = Space::find($space_id);
        $this->space_activities = SpaceActivity::get();
        $this->enable_req = $enable_req;
        return view('content.seller.space.activities-step', $this->data);
    }

    public function addActivities(Request $req, $space_id)
    {
        try {
            $data = $req->except('_token');
            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update(['last_step' => '8']);
            if (isset($data['enabled_activities'])) {
                $enabledActivityIds = $data['enabled_activities'];

                if ($space->spaceHaveActivities) {
                    $space->spaceHaveActivities->each(function ($spaceHaveActivity) {
                        $spaceHaveActivity->delete();
                    });
                }

                // Loop through the activities and merge enabled activity IDs
                foreach ($data['activities'] as $activityId => $activityData) {
                    if (in_array($activityId, $enabledActivityIds)) {

                        $SpaceHavingActivity = new SpaceHavingActivity();
                        $SpaceHavingActivity->space_id = $space_id;
                        $SpaceHavingActivity->rate_per_hour = $activityData['rate_per_hour'][0];
                        $SpaceHavingActivity->minimum_hour = $activityData['minimum_hour'][0];
                        $SpaceHavingActivity->discount = $activityData['discount'][0];
                        $SpaceHavingActivity->space_activity_id = $activityData['space_activity_id'][0];
                        $SpaceHavingActivity->instant_booking = $activityData['instant_booking'][0];
                        $SpaceHavingActivity->max_guests = $activityData['max_guests'][0];
                        $SpaceHavingActivity->save();

                        if ($activityData['activity_have_amenity'] && isset($activityData['activity_have_amenity'][0])) {

                            foreach ($activityData['activity_have_amenity'] as $activity_have_amenity) {
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
                    return redirect()->route('my-listing')->with('success', 'Listing Updated Successfully.');
                }
                return redirect()->route('contact-step', ['space_id' => $space_id]);
            } else {
                return redirect()->back()->with('error', 'Please select any activity.');
            }

            if ($req->enbale_req == '1') {
                $space->update(['last_step' => '10', 'status' => '1']);
                return redirect()->route('my-listing')->with('success', 'Listing Updated Successfully.');
            }

            return redirect()->route('contact-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function contactStep($space_id)
    {
        $space = Space::find($space_id);
        return view('content.seller.space.contact-step', ['space' => $space]);
    }

    public function addContactInfo(Request $req, $space_id)
    {
        $req->validate([
            'c_u_fname'=>'required',
            'c_u_lname'=>'required',
            'c_u_phone'=>'required',
        ]);
        try {
            $data = $req->except('_token', 'c_u_img');
            $space = Space::find($space_id);
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
            $space->update($data);

            if (isset($req->c_u_img)) {
                $image = $req->c_u_img;
                $foldername = '/uploads/seller/spaces/contact_user/';
                $filename = time() . '-' . rand(00000, 99999) . '.' . $image->getClientOriginalExtension();;
                $image->move(public_path() . $foldername, $filename);
                $space->update(['c_u_img' => $foldername . $filename]);
            }

            $userHasSpaces = Space::whereUserId(auth()->user()->id)->whereLastStep('10')->exists();

            if ($userHasSpaces) {
                $space->update(['last_step' => '10', 'status' => '1']);
                return redirect()->route('complete')->with('success', 'Listing added successfully');
            } else {
                return redirect()->route('policies-step', ['space_id' => $space_id]);
            }

            return redirect()->route('policies-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function policiesStep($space_id)
    {
        $this->space = Space::find($space_id);
        $this->company_policies = CompanyPolicy::get();
        return view('content.seller.space.policies-step', $this->data);
    }

    public function addPolicies(Request $req, $space_id)
    {
        $req->validate([
            'company_policy'=>'required'
        ]);
        try {
            $data = $req->except('_token');

            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

            if (isset($data['company_policy']) && isset($data['company_policy'][0]) && $data['company_policy'][0] !== null) {
                if ($space->spaceHavePolicies) {
                    // Update existing Company Policies
                    $existingPolicies = $space->spaceHavePolicies;

                    // Remove any existing Company Policies not present in the new data
                    $policiesToKeep = array_intersect($existingPolicies->pluck('company_policy_id')->toArray(), $data['company_policy']);

                    // Delete any Company Policies that are not in the list to keep
                    $existingPolicies->whereNotIn('company_policy_id', $policiesToKeep)->each(function ($companyPolicy) {
                        $companyPolicy->delete();
                    });

                    // Create new Company Policies if not already associated
                    foreach ($data['company_policy'] as $company_policy) {
                        if (!$existingPolicies->contains('company_policy_id', $company_policy)) {
                            SpaceHaveCompanyPolicy::create([
                                'company_policy_id' => $company_policy,
                                'space_id' => $space->id
                            ]);
                        }
                    }
                } else {
                    // Create new Company Policies
                    foreach ($data['company_policy'] as $company_policy) {
                        SpaceHaveCompanyPolicy::create([
                            'company_policy_id' => $company_policy,
                            'space_id' => $space->id
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

            return redirect()->route('complete')->with('success', 'Listing added successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
