<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\CancellationPolicy;
use App\Models\ParkingOption;
use App\Models\SafetyMeasure;
use App\Models\Space;
use App\Models\SpaceActivity;
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

    public function parkingStep($space_id)
    {
        try {
            $this->space_id =  $space_id;
            $this->space_types = SpaceType::get();
            $this->parking_options = ParkingOption::get();
            return view('content.seller.space.parking-step', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addParking(Request $req, $space_id)
    {
        try {
            $data = $req->except('_token');

            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

            if (isset($data['parking_option']) && isset($data['parking_option'][0]) && $data['parking_option'][0] !== null) {
                if ($space->spaceHaveParkings) {
                    // Update existing parking options
                    $existingParkingOptions = $space->spaceHaveParkings;

                    // Remove any existing parking options not present in the new data
                    $parkingOptionsToKeep = array_intersect($existingParkingOptions->pluck('parking_option_id')->toArray(), $data['parking_option']);

                    // Delete any parking options that are not in the list to keep
                    $existingParkingOptions->whereNotIn('parking_option_id', $parkingOptionsToKeep)->each(function ($parkingOption) {
                        $parkingOption->delete();
                    });

                    // Create new parking options if not already associated
                    foreach ($data['parking_option'] as $parking_option) {
                        if (!$existingParkingOptions->contains('parking_option_id', $parking_option)) {
                            SpaceHavingParkingOption::create([
                                'parking_option_id' => $parking_option,
                                'space_id' => $space->id
                            ]);
                        }
                    }
                } else {
                    // Create new parking options
                    foreach ($data['parking_option'] as $parking_option) {
                        SpaceHavingParkingOption::create([
                            'parking_option_id' => $parking_option,
                            'space_id' => $space->id
                        ]);
                    }
                }
            } else {
                // Remove parking options if toggle switch is off
                if ($space->spaceHaveParkings) {
                    $space->spaceHaveParkings->each(function ($parkingOption) {
                        $parkingOption->delete();
                    });
                }
            }

            return redirect()->route('about-step', ['space_id' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function aboutStep($space_id)
    {
        return view('content.seller.space.about-step', ['space_id' => $space_id]);
    }

    public function addAbout(Request $req, $space_id)
    {
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
        return view('content.seller.space.images-step', ['space_id' => $space_id]);
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
        return redirect()->route('safety-measure-step', ['space_id' => $space_id]);
        // return view('content.seller.space.operating-hours-step',['space_id' => $space_id]);
    }

    public function safetyMeasureStep($space_id)
    {
        $this->safety_measures = SafetyMeasure::get();
        $this->space_id = $space_id;
        return view('content.seller.space.safety-measure-step', $this->data);
    }

    public function addSafetyMeasure(Request $req, $space_id)
    {
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
        $this->cancel_policies = CancellationPolicy::get();
        $this->space_id = $space_id;
        return view('content.seller.space.cancel-policy-step', $this->data);
    }

    public function addCancelPolicy(Request $req, $space_id)
    {

        try {
            $data = $req->except('_token');
            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

            return redirect()->route('activities-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function activitiesStep($space_id)
    {
        $this->space_activities = SpaceActivity::get();
        $this->space_id = $space_id;
        return view('content.seller.space.activities-step', $this->data);
    }

    public function addActivities(Request $req, $space_id)
    {

        try {

            $data = $req->except('_token');

            dd($data);
            $space = Space::find($space_id);
            if (!$space) {
                return redirect()->back()->with('error', 'Space not found.');
            }
            $space->update($data);

            return redirect()->route('cancel-policy-step', ['space_id' => $space_id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
