<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntAmenity;
use App\Models\ActivityHavingAmenity;
use App\Models\SpaceAmenity;
use Illuminate\Http\Request;

class GeneralSettingsController extends AdminBaseController
{
    public function amenitiesIndex()
    {
        $this->activityHavingAmenities = ActivityHavingAmenity::with(['space_amenity','space_activity'])->get();
        // $this->spaceAmenities = SpaceAmenity::get();
        $this->entAmenities = EntAmenity::get();
        return view('content.admin.general_settings.amenities-index',$this->data);
    }

    public function deleteAmenity($id, $type)
    {
        $model = $type === 'space' ? SpaceAmenity::class : ($type === 'entertainment' ? EntAmenity::class : null);

        if ($model) {
            $model::find($id)->delete();
            return redirect()->back()->with('success', 'Amenity Deleted Successfully.');
        }
    }

    public function addAmenity(Request $req, $type)
    {
        $model = $type === 'space' ? SpaceAmenity::class : ($type === 'entertainment' ? EntAmenity::class : null);

        if ($model) {
            $model::create(['name' => $req->name]);
            return redirect()->back()->with('success', 'Amenity Added Successfully.');
        }
    }

}
