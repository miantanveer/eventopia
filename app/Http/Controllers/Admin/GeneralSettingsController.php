<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntAmenity;
use App\Models\ActivityHavingAmenity;
use App\Models\EntActivityAmenity;
use App\Models\SpaceAmenity;
use Illuminate\Http\Request;

class GeneralSettingsController extends AdminBaseController
{
    public function amenitiesIndex()
    {
        $this->spaceActivityHavingAmenities = ActivityHavingAmenity::with(['space_amenity','space_activity'])->get();
        $this->entertainmentActivityHavingAmenities = EntActivityAmenity::with('activity','activityAmenties')->get();
        return view('content.admin.general_settings.amenities-index',$this->data);
    }

    public function addAmenity(Request $req, $type)
    {
        $model = $type === 'space' ? SpaceAmenity::class : ($type === 'entertainment' ? EntAmenity::class : null);

        if ($model) {
            $model::create(['name' => $req->name]);
            return redirect()->back()->with('success', 'Amenity Added Successfully.');
        }
    }

    public function deleteAmenity($id, $type)
    {
        $model = $type === 'space' ? ActivityHavingAmenity::class : ($type === 'entertainment' ? EntActivityAmenity::class : null);

        if ($model) {
            $model::find($id)->delete();
            return redirect()->back()->with('success', 'Amenity of Activity Deleted Successfully.');
        }
    }

}
