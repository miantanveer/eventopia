<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntAmenity;
use App\Models\ActivityHavingAmenity;
use App\Models\EntActivity;
use App\Models\EntActivityAmenity;
use App\Models\ParkingOption;
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

    public function editAmenity(Request $request)
    {
        // dd($request->all());
        $type = $request->type;
        if ($type == 'space') {
            $amenity = SpaceAmenity::find($request->amenity_id);
            $amenity->name = $request->name;
            $amenity->save();
            $activity_amenity = ActivityHavingAmenity::find($request->id);
            $activity_amenity->space_amenity_id = $amenity->id;
            $activity_amenity->space_activity_id = $request->space_activity_id;
            $activity_amenity->save();
        } elseif ($type == 'entertainment') {
            $amenity = EntAmenity::find($request->amenity_id);
            $amenity->name = $request->name;
            $amenity->save();
            $activity_amenity = EntActivityAmenity::find($request->id);
            $activity_amenity->ent_amenity_id = $amenity->id;
            $activity_amenity->entertainment_activity_id = $request->ent_activity_id;
            $activity_amenity->save();
            // $amenity = EntAmenity::create(['name' => $request->name]);
            // EntActivityAmenity::create(['ent_amenity_id' => $modal->id, 'entertainment_activity_id' => $request->ent_activity]);
        }

        return redirect()->back()->with('success', 'Amenity updated Successfully.');
    }

    public function deleteAmenity($id, $type)
    {
        $model = $type === 'space' ? ActivityHavingAmenity::class : ($type === 'entertainment' ? EntActivityAmenity::class : null);

        if ($model) {
            $model::find($id)->delete();
            return redirect()->back()->with('success', 'Amenity of Activity Deleted Successfully.');
        }
    }

    public function manageParkingOptions(Request $request)
    {
        if ($request->action == 'add') {
            $option = new ParkingOption();
            $option->option = $request->name;
            $option->save();
            return redirect()->back()->with('success', 'Parking Option Added Successfully!');
        }
        if ($request->action == 'edit') {
            $option = ParkingOption::find($request->id);
            $option->option = $request->name;
            $option->save();
            return redirect()->back()->with('success', 'Parking Option Updated Successfully!');
        }
        if ($request->action == 'delete') {
            $option = ParkingOption::whereId($request->id)->delete();
            return redirect()->back()->with('success', 'Parking Option Deleted Successfully!');
        }
        $page_data['parkingOptions'] = ParkingOption::all();
        return view('content.admin.general_settings.parkingOptions', $page_data);
    }
}
