<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserBaseController;
use App\Models\OperatingDay;
use App\Models\Space;
use Illuminate\Http\Request;

class BookingController extends UserBaseController
{
    public function spaceDetail($id)
    {
        $this->space = Space::find($id);
        // $operatingDays = OperatingDay::where($operatingDayModel, $id)->get();

        //     $operatingHoursData = [];

        //     foreach ($operatingDays as $operatingDay) {
        //         $operatingHoursData[$operatingDay->week_day] = [];

        //         foreach ($operatingDay->operatingHours as $operatingHour) {
        //             $hours = [
        //                 'radio' => $operatingHour->radio,
        //                 'start_time' => $operatingHour->start_time,
        //                 'end_time' => $operatingHour->end_time,
        //             ];

        //             if ($operatingHour->radio === '0') {
        //                 $hours['start_time'] = '6:00 AM';
        //                 $hours['end_time'] = '12:00 AM';
        //             }

        //             $operatingHoursData[$operatingDay->week_day][] = $hours;
        //         }
        //     }
        return view('content.customer.space-detail', $this->data);
    }
}
