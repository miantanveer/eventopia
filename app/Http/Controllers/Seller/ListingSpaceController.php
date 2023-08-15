<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
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
        return view('content.seller.space-form-steps',$this->data);
    }

    public function addAddress(Request $req)
    {
        $data = $req->except('_token');
        dd($data);
        $data['user_id'] = auth()->user()->id;
        $space = Space::create($data);
        return response()->json(['success'=>true]);
        // dd($space);
    }
}
