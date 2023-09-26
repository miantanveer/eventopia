<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceImages;
use App\Models\ServiceTeam;
use App\Models\ServiceTitle;
use App\Models\TeamMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class ServiceController extends UserBaseController
{
    public function serviceForm1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'serviceTitle' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $service = new Service();
        $service->user_id = user_id();
        $service->title = $request->serviceTitle;
        $service->description = $request->description;
        $service->status = '0';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return response()->json(['id'=>$id],200);
    }

    public function loadFormStep1($id)
    {
        $title = ServiceTitle::get();
        $service = Service::find($id);
        return response()->json(['service' => $service, 'title' => $title],200);
    }

    public function UpdateFormStep1(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'serviceTitle' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $service = Service::find($id);
        $service->user_id = auth()->user()->id;
        $service->title = $request->serviceTitle;
        $service->description = $request->description;
        $service->status = '0';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return response()->json(['id'=>$id],200);
    }

    public function loadServiceForm2($id)
    {
        $images = Service::whereId($id)->whereUserId(user_id())->with('serviceImages')->get();
        foreach ($images as $img) {
            foreach ($img->serviceImages as $data) {
                $file_path = public_path($data->image);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $data->delete();
            }
        }
        return response()->json(['id' => $id, 'service' => $images],200);
    }

    public function serviceForm2(Request $request, $id)
    {
        $filename = '';
        $foldername = '';
        if ($request->hasFile('file')) {
            $image = $request->file;
            $filename = time() . '-' . $image->getClientOriginalName();
            $foldername = '/uploads/seller/service/';
            $image->move(public_path('/uploads/seller/service/'), $filename);
        }
        $image = new ServiceImages();
        $image->service_id = $id;
        $image->image = $foldername . $filename;
        $image->save();
        $service = Service::find($id);
        $service->last_steps = 'step-2';
        $service->save();
        return response()->json($image);
    }

    public function loadserviceForm3($id)
    {
        $service = Service::find($id);
        return response()->json(['id' => $id, 'service' => $service],200);
    }

    public function serviceForm3(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'destination' => 'required',
            'planning' => 'required',
            'activities' => 'required',
            'development' => 'required',
            'conceptBuilding' => 'required',
            'planningDevelopement' => 'required',
        ]);
         if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $service = Service::find($id);
        $service->destination = $request->destination;
        $service->planing = $request->planning;
        $service->activities = $request->activities;
        $service->development = $request->development;
        $service->concept_building = $request->conceptBuilding;
        $service->planning_developement = $request->planningDevelopement;
        $service->last_steps = 'step-3';
        $service->save();
        return response()->json(['id' => $id],200);
    }

    public function loadServiceForm4($id)
    {
        $service = Service::find($id);
        $service_category = ServiceCategory::get();
        return response()->json(['id' => $id, 'service' => $service, 'service_category' => $service_category],200);
    }

    public function serviceForm4(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
        ]);
         if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $service = Service::find($id);
        $service->category = $request->category;
        $service->address = $request->address;
        $service->country = $request->country;
        $service->city = $request->city;
        $service->state = $request->state;
        $service->postal_code = $request->postalCode;
        $service->lng = $request->lng;
        $service->lat = $request->lat;
        $service->last_steps = 'step-4';
        $service->save();
        return response()->json(['id' => $id], 200);
    }

    public function loadServiceForm5($id)
    {
        $time = Service::find($id);
        return response()->json(['id' => $id, 'time' => $time],200);
    }

    public function serviceForm5(Request $req, $id)
    {
        $service = Service::find($id);
        $service->last_steps = 'step-5';
        $service->save();
        try {
            $service = Service::find($id);
            if ($service) {
                $service->operatingDays()->delete();
            }
            $weekDay = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
            $counts = [0, 1, 2, 3, 4];
            foreach ($weekDay as $weekDay) {
                if ($req->$weekDay == $weekDay) {
                    $day = new OperatingDay();
                    $day->service_id = $id;
                    $day->week_day = $weekDay;
                    $day->save();

                    $week_day = $weekDay . 'Radio';

                    if ($req->$week_day == 0) {
                        $hour = new OperatingHour();
                        $hour->operating_day_id = $day->id;
                        $hour->radio = $req->$week_day;
                        $hour->start_time = '6 AM';
                        $hour->end_time = '12 AM';
                        $hour->save();
                    } else {
                        foreach ($counts as $count) {
                            $start_time = $weekDay . 'StartTime' . $count;
                            $end_time = $weekDay . 'EndTime' . $count;

                            if ($req->$start_time && $req->$end_time !== null) {
                                $hour = new OperatingHour();
                                $hour->operating_day_id = $day->id;
                                $hour->radio = $req->$week_day;
                                $hour->start_time = $req->$start_time;
                                $hour->end_time = $req->$end_time;
                                $hour->save();
                            }
                        }
                    }
                }
            }
            return response()->json(['id' => $id],200);
        } catch (\Throwable $th) {
            return response()->json(['error'=> $th->getMessage()],400);
        }
    }
}
