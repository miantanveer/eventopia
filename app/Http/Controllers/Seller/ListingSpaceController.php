<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\ParkingOption;
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
        return view('content.seller.space-form-steps', $this->data);
    }

    public function addAddress(Request $req)
    {
        try {
            $data = $req->except('_token');
            $data['user_id'] = auth()->user()->id;
            $space = Space::create($data);
            if (!$space) {
                return response()->json(['error' => true]);
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
            foreach ($data['parking_option'] as $parking_option) {

                SpaceHavingParkingOption::create([
                    'parking_option_id'=>$parking_option,
                    'space_id'=>$space->id
                    ]
                );
            }
            return response()->json(['success' => true, 'data' => $space->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
