<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\ServiceImages;
use App\Models\Services;
use App\Models\ServiceTeam;
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
        $service = new Services();
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
        return view('content.seller.service.form-step-2',['id'=>$id]);
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
        $service = Services::find($id);
        $service->last_steps = 'step-2';
        $service->save();
        return response()->json($image);
    }
    public function loadserviceForm3($id)
    {
        return view('content.seller.service.form-step-3',['id'=>$id]);
    }
    public function serviceForm3(Request $request,$id)
    {
        $request->validate([
            'destination'=>'required',
            'planning'=>'required',
            'activities'=>'required',
        ]);
        $service = Services::find($id);
        $service->destination = $request->destination;
        $service->planing = $request->planning;
        $service->activities = $request->activities;
        $service->last_steps = 'step-3';
        $service->save();
        return redirect()->route('service-form-4',['id'=>$id]);
    }
    public function loadServiceForm4($id)
    {
        return view('content.seller.service.form-step-4',['id'=>$id]);
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
        $service = Services::find($id);
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
        return view('content.seller.service.form-step-5',['id'=>$id]);
    }
    public function serviceForm5(Request $request,$id)
    {
        dd($request);
    }
    public function serviceForm6(Request $request,$id)
    {
        $request->validate([
            'price'=>'required'
        ]);
        $service = Services::find($id);
        $service->service_price = $request->price;
        $service->last_steps = 'step-4';
        $service->save();
        return view('content.seller.service.form-step-5',['id'=>$id]);
    }
    public function serviceForm7(Request $request,$id)
    {
        $request->validate([
            'destination'=>'required',
            'decription'=>'required',
        ]);
        $filename = '';
        if ($request->hasFile('file')) {
            $image = $request->file;
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/seller/teams/'), $filename);
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
    public function complete()
    {
        return view('content.seller.steps-form-submit');
    }
}
