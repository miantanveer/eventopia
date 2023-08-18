<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\ParkingOption;
use App\Models\SafetyMeasure;
use App\Models\Space;
use App\Models\SpaceHavingParkingOption;
use App\Models\SpaceType;
use Illuminate\Http\Request;

class ListingSpaceController extends UserBaseController
{
    public function listSpace()
    {
        return view('content.seller.list-space');
    }

    public function addSpaceForm()
    {
        $this->space_types = SpaceType::get();
        $this->parking_options = ParkingOption::get();
        $this->safety_measures = SafetyMeasure::get();
        return view('content.seller.space-form-steps', $this->data);
    }

    public function addAddress(Request $req)
    {
        try {
            $data = $req->except('_token');

            if (isset($data['space_id'])) {
                $space = Space::find($data['space_id']);
                if (!$space) {
                    return response()->json(['error' => true]);
                }
                $space->update($data);
            } else {
                $data['user_id'] = auth()->user()->id;
                $space = Space::create($data);
                if (!$space) {
                    return response()->json(['error' => true]);
                }
            }
            return response()->json(['success' => true, 'data' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addParking(Request $req)
    {
        try {
            $data = $req->except('_token');
            $space = Space::find($data['space_id']);
            if (!$space) {
                return response()->json(['error' => true]);
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

            return response()->json(['success' => true, 'data' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addAbout(Request $req)
    {
        try {
            $data = $req->except('_token');
            $space = Space::find($data['space_id']);
            if (!$space) {
                return response()->json(['error' => true]);
            }
            $space->update($data);

            return response()->json(['success' => true, 'data' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addSafetyMeasure(Request $req)
    {
        // try {
            $data = $req->except('_token');
            dd($data);
            $space = Space::find($data['space_id']);
            if (!$space) {
                return response()->json(['error' => true]);
            }
            $space->update($data);

            return response()->json(['success' => true, 'data' => $space->id]);
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', $th->getMessage());
        // }
    }
}
