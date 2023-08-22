<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\ServiceImages;
use App\Models\Service;
use App\Models\ServiceTeam;
use App\Models\ServiceTimeSetting;
use App\Models\OperatingDay;
use App\Models\OperatingHour;
use App\Models\TeamMembers;
use Illuminate\Http\Request;


class ServiceController extends UserBaseController
{
    public function serviceForm1(Request $request)
    {
        $request->validate([
            'service_title'=>'required',
            'description'=>'required'
        ]);
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->title = $request->service_title;
        $service->descrption = $request->description;
        $service->status = '1';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return redirect()->route('service-form-2',$id);
    }
    public function loadServiceForm2($id)
    {
        $images = ServiceImages::whereServiceId($id)->get();
        return view('content.seller.service.form-step-2',['id'=>$id,'images'=>$images]);
    }
    public function serviceForm2(Request $request,$id)
    {
        $filename = '';
        if ($request->hasFile('file')) {
            $image = $request->file;
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/service/'), $filename);
        }
        $image = new ServiceImages();
        $image->service_id = $id;
        $image->image = $filename;
        $image->save();
        $service = Service::find($id);
        $service->last_steps = 'step-2';
        $service->save();
        return response()->json($image);
    }
    public function loadserviceForm3($id)
    {
        $service = Service::find($id);
        return view('content.seller.service.form-step-3',['id'=>$id,'service'=>$service]);
    }
    public function serviceForm3(Request $request,$id)
    {
        $request->validate([
            'destination'=>'required',
            'planning'=>'required',
            'activities'=>'required',
        ]);
        $service = Service::find($id);
        $service->destination = $request->destination;
        $service->planing = $request->planning;
        $service->activities = $request->activities;
        $service->last_steps = 'step-3';
        $service->save();
        return redirect()->route('service-form-4',['id'=>$id]);
    }
    public function loadServiceForm4($id)
    {
        $service = Service::find($id);
        return view('content.seller.service.form-step-4',['id'=>$id,'service'=>$service]);
    }
    public function serviceForm4(Request $request, $id)
    {
        $request->validate([
            'category'=>'required',
            'address'=>'required',
            'country'=>'required',
            'city'=>'required',
            'state'=>'required',
            'postal_code'=>'required'
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
        return redirect()->route('service-form-5',['id'=>$id]);
    }
    public function loadServiceForm5($id)
    {
        $time = ServiceTimeSetting::whereServiceId($id)->first();
        return view('content.seller.service.form-step-5',['id'=>$id,'time'=>$time]);
    }
    public function serviceForm5(Request $request,$id)
    {
        if($request->has('monday')) $this->operatingDay($id,$request->monday,$request->monday_radio,$request->monday_start_time,$request->monday_end_time);
        if($request->has('tuesday')) $this->operatingDay($id,$request->tuesday,$request->tuesday_radio,$request->tuesday_start_time,$request->tuesday_end_time);
        if($request->has('wednesday')) $this->operatingDay($id,$request->wednesday,$request->wednesday_radio,$request->wednesday_start_time,$request->wednesday_end_time);
        if($request->has('thursday')) $this->operatingDay($id,$request->thursday,$request->thursday_radio,$request->thursday_start_time,$request->thursday_end_time);
        if($request->has('friday')) $this->operatingDay($id,$request->friday,$request->friday_radio,$request->friday_start_time,$request->friday_end_time);
        if($request->has('saturday')) $this->operatingDay($id,$request->saturday,$request->saturday_radio,$request->saturday_start_time,$request->saturday_end_time);
        if($request->has('sunday')) $this->operatingDay($id,$request->sunday,$request->sunday_radio,$request->sunday_start_time,$request->sunday_end_time);
        return redirect()->route('service-form-6',['id'=>$id]);
    }
    public function loadserviceForm6($id)
    {
        $service = Service::find($id);
        return view('content.seller.service.form-step-6',['id'=>$id,'service'=>$service]);
    }
    public function serviceForm6(Request $request,$id)
    {
        $request->validate([
            'price'=>'required'
        ]);
        $service = Service::find($id);
        $service->price = $request->price;
        $service->last_steps = 'step-4';
        $service->save();
        return redirect()->route('service-form-7',['id'=>$id]);
    }
    public function loadserviceForm7($id)
    {
        $team = ServiceTeam::find($id);
        return view('content.seller.service.form-step-7',['id'=>$id,'team'=>$team]);
    }
    public function serviceForm7(Request $request,$id)
    {
        $request->validate([
            'destination'=>'required',
            'decription'=>'required',
        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $foldername = '/uploads/seller/teams/';
            $filename = time() . '-' . rand(00000, 99999) . '.' . $image->extension();
            $image->move(public_path() . $foldername, $filename);
        }

        $serviceteam = new ServiceTeam();
        $serviceteam->service_id = $id;
        $serviceteam->team_description = $request->decription;
        $serviceteam->image = $filename;
        $serviceteam->save();
        $this->teamMember($serviceteam->id,$request->destination);
        if($request->has('destination1')) $this->teamMember($serviceteam->id,$request->destination1);
        if($request->has('destination2')) $this->teamMember($serviceteam->id,$request->destination2);
        if($request->has('destination3')) $this->teamMember($serviceteam->id,$request->destination3);
        return redirect()->route('complete')->with('success', "Service Created Successfully");
    }
    public function teamMember($id,$destination)
    {
        $teamname = new TeamMembers();
        $teamname->service_teams_id = $id;
        $teamname->name = $destination;
        $teamname->save();
    }
    public function operatingDay($id,$week_day,$radio,$start,$end)
    {
        $day = new OperatingDay();
        $day->Service_id = $id;
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
    public function loadFormStep1($id)
    {
        $service = Service::find($id);
        return view('content.seller.service.form-step-1',['service'=>$service]);
    }
    public function UpdateFormStep1(Request $request, $id)
    {
        $request->validate([
            'service_title'=>'required',
            'description'=>'required'
        ]);
        $service = Service::find($id);
        $service->user_id = auth()->user()->id;
        $service->title = $request->service_title;
        $service->descrption = $request->description;
        $service->status = '1';
        $service->last_steps = 'step-1';
        $service->save();
        $id = $service->id;
        return redirect()->route('service-form-2',$id);
    }
}
