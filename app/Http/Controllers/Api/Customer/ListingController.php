<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\UserBaseController;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Space;
use App\Models\Entertainment;

class ListingController extends UserBaseController
{
    public function index()
    {
        $this->service = Service::with('serviceImages')->get();
        $this->space = Space::with('spaceImages')->get();
        return response()->json($this->data, 200);
    }
    public function listing($type)
    {
        if($type == 'service'){
            $this->listing = Service::with('serviceImages',)->get();
        }
        elseif($type == 'entertainment'){
            $this->listing = Entertainment::with('entertainmentImages','entertainmentActivities')->get();
        }
        elseif($type == 'space'){
            $this->listing = Space::with('spaceImages','spaceHaveActivities')->get();
        }
        return response()->json($this->data, 200);
    }
    public function filter(Request $req,$type)
    {
        if($type == 'service'){
            $this->listing = Service::with('serviceImages')->where(function($query) use($req){
                $query->whereAddress($req->address)
                ->orWhere('country',$req->address)
                ->orWhere('city',$req->address)
                ->orWhere('state',$req->address)
                ->wherePrice($req->price)
                ->whereHas('quotes',function($subquery) use($req){
                   $subquery->whereGuests($req->guests);
                });
            })
            ->orWhere(function ($query) use ($req) {
                $query->when($req->price !== null, function ($subquery) use ($req) {
                    return $subquery->wherePrice($req->price);
                });
                $query->when($req->attendees !== null, function ($subquery) use ($req) {
                    $subquery->whereHas('quotes', function ($quotequery) use ($req) {
                        return $quotequery->whereGuests($req->attendees);
                    });
                });
            })
            ->get();            
        }
        elseif($type == 'entertainment'){
            $this->listing = Entertainment::with('entertainmentImages','entertainmentActivities')->get();
        }
        elseif($type == 'space'){
            $this->listing = Space::with('spaceImages','spaceHaveActivities')->get();
        }
        return response()->json($this->data, 200);
    }
}
