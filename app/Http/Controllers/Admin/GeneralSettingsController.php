<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntAmenity;
use App\Models\ActivityHavingAmenity;
use App\Models\EntActivity;
use App\Models\EntActivityAmenity;
use App\Models\SpaceActivity;
use App\Models\SpaceAmenity;
use Illuminate\Http\Request;

class GeneralSettingsController extends AdminBaseController
{
    public function amenitiesIndex()
    {
        $this->spaceActivityHavingAmenities = ActivityHavingAmenity::with(['space_amenity', 'space_activity'])->get();
        $this->entertainmentActivityHavingAmenities = EntActivityAmenity::with('activity', 'activityAmenties')->get();
        $this->spaceActivities = SpaceActivity::get();
        $this->entActivities = EntActivity::get();
        return view('content.admin.general_settings.amenities-index', $this->data);
    }

    public function addAmenity(Request $req, $type)
    {
        if ($type === 'space') {
            $modal = SpaceAmenity::create(['name' => $req->name]);
            ActivityHavingAmenity::create(['space_amenity_id' => $modal->id, 'space_activity_id' => $req->space_activity]);
        } elseif ($type === 'entertainment') {
            $modal = EntAmenity::create(['name' => $req->name]);
            EntActivityAmenity::create(['ent_amenity_id' => $modal->id, 'entertainment_activity_id' => $req->ent_activity]);
        }

        return redirect()->back()->with('success', 'Amenity Added Successfully.');
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
