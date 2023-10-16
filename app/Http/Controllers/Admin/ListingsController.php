<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use App\Models\EntertainmentImages;
use App\Models\Service;
use App\Models\ServiceImages;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ListingsController extends AdminBaseController
{
    public function spacesIndex()
    {
        $this->spaces = Space::whereIn('status', ['0', '1', '2'])->whereLastStep('10')->get();
        $this->totalSpaces = Space::whereIn('status', ['0', '1', '2'])->whereLastStep('10')->count();
        $this->reviewSpaces = Space::whereStatus('0')->whereLastStep('10')->count();
        $this->activeSpaces = Space::whereStatus('1')->whereLastStep('10')->count();
        $this->rejectedSpaces = Space::whereStatus('2')->whereLastStep('10')->count();
        return view('content.admin.listings.spaces', $this->data);
    }

    public function entertainmentsIndex()
    {
        $this->entertainments = Entertainment::whereIn('status', ['0', '1', '2'])->whereLastSteps('step-9')->get();
        $this->totalEntertainments = $this->entertainments->count();
        $this->reviewEntertainments = Entertainment::whereStatus('0')->whereLastSteps('step-9')->count();
        $this->activeEntertainments = Entertainment::whereStatus('1')->whereLastSteps('step-9')->count();
        $this->rejectedEntertainments = Entertainment::whereStatus('2')->whereLastSteps('step-9')->count();
        return view('content.admin.listings.entertainments', $this->data);
    }

    public function servicesIndex()
    {
        $this->services = Service::whereIn('status', ['0', '1', '2'])->whereLastSteps('step-7')->get();
        $this->totalServices = $this->services->count();
        $this->reviewServices = Service::whereStatus('0')->whereLastSteps('10')->count();
        $this->activeServices = Service::whereStatus('1')->whereLastSteps('10')->count();
        $this->rejectedServices = Service::whereStatus('2')->whereLastSteps('10')->count();
        return view('content.admin.listings.services', $this->data);
    }

    public function deleteListing($id, $type)
    {
        if ($type == 'space') {
            $space = Space::find($id);
            if (isset($space->spaceImages)) {
                foreach ($space->spaceImages as $space_image) {
                    Storage::disk('s3')->delete($space_image->image);
                }
            }
            $space->delete();
        } elseif ($type == 'entertainment') {
            $entertainment = Entertainment::find($id);
            $pre_image = EntertainmentImages::whereEntertainmentId($id)->exists();
            if ($pre_image) {
                $delete_img = EntertainmentImages::whereEntertainmentId($id)->get();
                if (isset($delete_img)) {
                    foreach ($delete_img as $key => $data) {
                        Storage::disk('s3')->delete($data->image);
                    }
                }
            }
            $entertainment->delete();
        } elseif ($type == 'service') {
            $service = Service::find($id);
            $pre_image = ServiceImages::whereServiceId($id)->exists();
            if ($pre_image) {
                $delete_img = ServiceImages::whereServiceId($id)->get();
                if (isset($delete_img)) {
                    foreach ($delete_img as $key => $data) {
                        Storage::disk('s3')->delete($data->image);
                    }
                }
            }
            $service->delete();
        }

        return redirect()->back()->with('success', ' Listing Deleted Successfully');
    }

    public function updateStatus(Request $req)
    {
        try {
            if ($req->type == 'space') {
                $space = Space::find($req->id);

                if (!$space) {
                    return response()->json(['message' => 'Space not found', 'status' => 404]);
                }

                $space->update(['status' => $req->status]);
            } elseif ($req->type == 'entertainment') {
                $entertainment = Entertainment::find($req->id);

                if (!$entertainment) {
                    return response()->json(['message' => 'Entertainment not found', 'status' => 404]);
                }

                $entertainment->update(['status' => $req->status]);
            } elseif ($req->type == 'service') {
                $service = Service::find($req->id);
                if (!$service) {
                    return response()->json(['message' => 'Service not found', 'status' => 404]);
                }

                $service->update(['status' => $req->status]);
            }

            // Assuming you're returning a JSON response, you can customize the response as needed.
            return response()->json(['message' => 'Status updated successfully', 'status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating status', 'status' => 500]);
        }
    }

    public function detailIndex($id, $type)
    {
        try {
            if ($type == 'space') {
                $this->space = Space::find($id);
            } elseif ($type == 'entertainment') {
                $this->entertainment = Entertainment::find($id);
            } elseif ($type == 'service') {
                $this->service = Service::find($id);
            }

            $this->type = $type;
            return view('content.seller.booking-details', $this->data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something unexpected happened on server. ' . $th->getMessage());
        }
    }
}
