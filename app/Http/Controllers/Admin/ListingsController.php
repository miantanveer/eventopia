<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Space;
use Illuminate\Http\Request;

class ListingsController extends AdminBaseController
{
    public function spacesIndex()
    {
        $this->spaces = Space::whereIn('status', ['0','1','2'])->whereLastStep('10')->get();
        $this->totalSpaces = Space::whereIn('status', ['0','1','2'])->whereLastStep('10')->count();
        $this->reviewSpaces = Space::whereStatus('0')->whereLastStep('10')->count();
        $this->activeSpaces = Space::whereStatus('1')->whereLastStep('10')->count();
        $this->rejectedSpaces = Space::whereStatus('2')->whereLastStep('10')->count();
        return view('content.admin.listings.spaces',$this->data);
    }

    public function entertainmentsIndex()
    {
        dd("enter");
    }

    public function servicesIndex()
    {
        dd("service");
    }

    public function deleteSpaceListing($space_id)
    {
        $space = Space::find($space_id);
        if (isset($space->spaceImages)) {
            foreach ($space->spaceImages as $space_image) {
                $file_path = public_path($space_image->image);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
        }
        $space->delete();
        return redirect()->back()->with('success', 'Space Listing Deleted Successfully');
    }

    public function updateSpaceStatus(Request $req)
    {
        dd($req);
        // $space = Space::find($space_id);
        // if (isset($space->spaceImages)) {
        //     foreach ($space->spaceImages as $space_image) {
        //         $file_path = public_path($space_image->image);
        //         if (file_exists($file_path)) {
        //             unlink($file_path);
        //         }
        //     }
        // }
        // $space->delete();
        // return redirect()->back()->with('success', 'Space Listing Deleted Successfully');
    }
}
