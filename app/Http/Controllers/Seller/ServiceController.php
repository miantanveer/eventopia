<?php

namespace App\Http\Controllers\Seller;

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

class ServiceController extends UserBaseController
{
    public function listService()
    {
        if (Auth::check()) {
            return view('content.seller.list-service');
        }

        return view('content.seller.add-services');
    }

    public function serviceForm1(Request $request)
    {
        $request->validate([
            'service_title' => 'required',
            'description' => 'required',
        ]);
        $service = new Service();
        $service->user_id = user_id();
        $service->title = $request->service_title;
        $service->description = $request->description;
        $service->status = '0';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return redirect()->route('service-form-2', $id);
    }
    public function loadFormStep1($id)
    {
        $title = ServiceTitle::get();
        $service = Service::find($id);
        return view('content.seller.service.create.form-step-1', ['service' => $service, 'title' => $title]);
    }
    public function UpdateFormStep1(Request $request, $id)
    {
        $request->validate([
            'service_title' => 'required',
            'description' => 'required',
        ]);
        $service = Service::find($id);
        $service->user_id = auth()->user()->id;
        $service->title = $request->service_title;
        $service->description = $request->description;
        $service->status = '0';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return redirect()->route('service-form-2', $id);
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
        return view('content.seller.service.create.form-step-2', ['id' => $id, 'images' => $images]);
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
        return view('content.seller.service.create.form-step-3', ['id' => $id, 'service' => $service]);
    }
    public function serviceForm3(Request $request, $id)
    {
        $request->validate([
            'destination' => 'required',
            'planning' => 'required',
            'activities' => 'required',
            'development' => 'required',
            'concept_building' => 'required',
            'planning_developement' => 'required',
        ]);
        $service = Service::find($id);
        $service->destination = $request->destination;
        $service->planing = $request->planning;
        $service->activities = $request->activities;
        $service->development = $request->development;
        $service->concept_building = $request->concept_building;
        $service->planning_developement = $request->planning_developement;
        $service->last_steps = 'step-3';
        $service->save();
        return redirect()->route('service-form-4', ['id' => $id]);
    }
    public function loadServiceForm4($id)
    {
        $service = Service::find($id);
        $service_category = ServiceCategory::get();
        return view('content.seller.service.create.form-step-4', ['id' => $id, 'service' => $service, 'service_category' => $service_category]);
    }
    public function serviceForm4(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);
        $service = Service::find($id);
        $service->category = $request->category;
        $service->address = $request->address;
        $service->country = $request->country;
        $service->city = $request->city;
        $service->state = $request->state;
        $service->postal_code = $request->postal_code;
        $service->lng = $request->lng;
        $service->lat = $request->lat;
        $service->last_steps = 'step-4';
        $service->save();
        return redirect()->route('service-form-5', ['id' => $id]);
    }
    public function loadServiceForm5($id)
    {
        $time = Service::find($id);
        return view('content.seller.service.create.form-step-5', ['id' => $id, 'time' => $time]);
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

                    $week_day = $weekDay . '_radio';

                    if ($req->$week_day == 0) {
                        $hour = new OperatingHour();
                        $hour->operating_day_id = $day->id;
                        $hour->radio = $req->$week_day;
                        $hour->start_time = '6 AM';
                        $hour->end_time = '12 AM';
                        $hour->save();
                    } else {
                        foreach ($counts as $count) {
                            $start_time = $weekDay . '_start_time_' . $count;
                            $end_time = $weekDay . '_end_time_' . $count;

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
            return redirect()->route('service-form-6', ['id' => $id]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function loadserviceForm6($id)
    {
        $service = Service::find($id);
        return view('content.seller.service.create.form-step-6', ['id' => $id, 'service' => $service]);
    }
    public function serviceForm6(Request $request, $id)
    {
        $request->validate([
            'price' => 'required',
        ]);
        $service = Service::find($id);
        $service->price = $request->price;
        $service->last_steps = 'step-6';
        $service->save();
        return redirect()->route('service-form-7', ['id' => $id]);
    }
    public function loadserviceForm7($id)
    {
        $team = ServiceTeam::find($id);
        return view('content.seller.service.create.form-step-7', ['id' => $id, 'team' => $team]);
    }
    public function serviceForm7(Request $request, $id)
    {
        $request->validate([
            'destination' => 'required',
            'decription' => 'required',
        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $foldername = '/uploads/seller/teams/';
            $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
            $image->move(public_path() . $foldername, $filename);
        }
        $service = Service::find($id);
        $service->last_steps = 'step-7';
        $service->save();
        $serviceteam = new ServiceTeam();
        $serviceteam->service_id = $id;
        $serviceteam->team_name = $request->destination;
        $serviceteam->team_description = $request->decription;
        $serviceteam->image = $filename;
        $serviceteam->save();
        $this->teamMember($serviceteam->id, $request->destination);
        if ($request->has('destination1')) {
            $this->teamMember($serviceteam->id, $request->destination1);
        }

        if ($request->has('destination2')) {
            $this->teamMember($serviceteam->id, $request->destination2);
        }

        if ($request->has('destination3')) {
            $this->teamMember($serviceteam->id, $request->destination3);
        }

        return redirect()->route('complete')->with('success', "Service Created Successfully");
    }
    public function teamMember($id, $destination)
    {
        $teamname = new TeamMembers();
        $teamname->service_teams_id = $id;
        $teamname->name = $destination;
        $teamname->save();
    }
    public function operatingDay($id, $week_day, $radio, $start, $end)
    {
        $day = new OperatingDay();
        $day->service_id = $id;
        $day->week_day = $week_day;
        $day->save();
        $hour = new OperatingHour();
        $hour->operating_day_id = $day->id;
        $hour->radio = $radio;
        $hour->start_time = $start;
        $hour->end_time = $end;
        $hour->save();
    }
    public function complete()
    {
        return view('content.seller.steps-form-submit');
    }
    public function resumeForm($id)
    {
        $service = Service::find($id);
        switch ($service->last_steps) {
            case 'step-1':
                return redirect()->route('service-form-2', ['id' => $service->id]);
                break;
            case 'step-2':
                return redirect()->route('service-form-3', ['id' => $service->id]);
                break;
            case 'step-3':
                return redirect()->route('service-form-4', ['id' => $service->id]);
                break;
            case 'step-4':
                return redirect()->route('service-form-5', ['id' => $service->id]);
                break;
            case 'step-5':
                return redirect()->route('service-form-6', ['id' => $service->id]);
                break;
            case 'step-6':
                return redirect()->route('service-form-7', ['id' => $service->id]);
                break;
        }

    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $pre_image = ServiceImages::whereServiceId($id)->exists();
        if ($pre_image) {
            $delete_img = ServiceImages::whereServiceId($id)->get();
            if (isset($delete_img)) {
                foreach ($delete_img as $key => $data) {
                    $file_path = public_path('/uploads/seller/service/') . $data->image;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                        $data->delete();
                    }
                }
            }
        }
        $service->delete();
        return redirect()->route('my-listing')->with('success', 'Service Deleted Successfully');
    }
}
