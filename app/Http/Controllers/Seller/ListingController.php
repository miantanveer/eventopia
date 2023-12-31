<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\UserBaseController;
use App\Models\Entertainment;
use App\Models\Service;
use App\Models\Space;
use App\Models\EntActivity;
use App\Models\SpaceActivity;
use Illuminate\Support\Facades\Storage;

class ListingController extends UserBaseController
{
    public function index()
    {
        // Space Getting
        $this->spaces = Space::whereUserId(user_id())->whereLastStep('10')->with('spaceHaveActivities.activities')->paginate(30);
        $this->spaces_remaining = Space::where('last_step', '!=', '10')->whereStatus('0')->get();
        $this->space_acitivities = SpaceActivity::get();
        // Entertainment Getting
        $this->entertainment_remaining = Entertainment::whereUserId(user_id())->where('last_steps', '!=', 'step-9')->get();
        $this->entertainment = Entertainment::whereUserId(user_id())->whereLastSteps('step-9')->with('entertainmentImages', 'entertainmentActivities.entertainment')->paginate(30);
        // Service Getting
        $this->service = Service::whereUserId(user_id())->whereLastSteps('step-7')->with('serviceImages')->paginate(30);
        $this->service_remaining = Service::whereUserId(user_id())->where('last_steps', '!=', 'step-7')->get();
        // Activity Getting
        $this->ent_activity = EntActivity::get();
        return view('content.seller.my-listing', $this->data);
    }

    public function resumeSpaceForm($id)
    {
        $space = Space::find($id);
        switch ($space->last_step) {
            case '1':
                return redirect()->route('parking-step', ['space_id' => $space->id]);
                break;
            case '2':
                return redirect()->route('about-step', ['space_id' => $space->id]);
                break;
            case '3':
                return redirect()->route('images-step', ['space_id' => $space->id]);
                break;
            case '4':
                return redirect()->route('operating-hour-step', ['space_id' => $space->id]);
                break;
            case '5':
                return redirect()->route('safety-measure-step', ['space_id' => $space->id]);
                break;
            case '6':
                return redirect()->route('cancel-policy-step', ['space_id' => $space->id]);
                break;
            case '7':
                return redirect()->route('activities-step', ['space_id' => $space->id,'key'=>0]);
                break;
            case '8':
                return redirect()->route('contact-step', ['space_id' => $space->id]);
                break;
            case '9':
                return redirect()->route('policies-step', ['space_id' => $space->id]);
                break;
            case '10':
                return redirect()->route('service-form-7', ['space_id' => $space->id]);
                break;
        }
    }

    public function deleteListing($space_id)
    {
        $space = Space::find($space_id);
        if (isset($space->spaceImages)) {
            foreach ($space->spaceImages as $space_image) {
                Storage::disk('s3')->delete($space_image->image);
            }
        }
        $space->delete();
        return redirect()->route('my-listing')->with('success', 'Listing Deleted Successfully');
    }
}
