<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\ParkingOption;
use App\Models\Space;
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
        return view('content.seller.space-form-steps',$this->data);
    }

    public function addAddress(Request $req)
    {
        $data = $req->except('_token');
        $data['user_id'] = auth()->user()->id;
        $space = Space::create($data);
        if (!$space) {
            return response()->json(['error'=>true]);
        }
        session(['space' => $space]);
        return response()->json(['success'=>true]);
    }

    public function addParking(Request $req)
    {
        dd($req);
        $data = $req->except('_token');
        $data['user_id'] = auth()->user()->id;
        $space = Space::create($data);
        if (!$space) {
            return response()->json(['error'=>true]);
        }
        return response()->json(['success'=>true,'data'=>$space->id]);
    }
}
