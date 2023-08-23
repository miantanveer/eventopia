<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'space_type_id',
        'cancellation_policy_id',
        'address',
        'country',
        'state',
        'city',
        'postal_code',
        'lat',
        'lng',
        'allowed_age',
        'parking_description',
        'security_devices_description',
        'space_title',
        'space_description',
        'space_size',
        'space_rules',
        'wifi_password',
        'arrival_instruction',
        'cleaning_process',
        'last_step',
        'c_u_fname',
        'c_u_lname',
        'c_u_phone',
        'c_u_img'
    ];

    public function spaceImages(){
        return $this->hasMany(SpaceImage::class);
    }

    public function spaceHaveParkings(){
        return $this->hasMany(SpaceHavingParkingOption::class);
    }

    public function spaceHaveMeasures(){
        return $this->hasMany(SpaceHavingMeasure::class);
    }

    public function operatingDays(){
        return $this->hasMany(OperatingDay::class);
    }

    public function spaceHaveActivities(){
        return $this->hasMany(SpaceHavingActivity::class);
    }

    public function spaceType(){
        return $this->belongsTo(SpaceType::class);
    }

    public function cancellationPolicy(){
        return $this->belongsTo(CancellationPolicy::class, 'cancellation_policy_id');
    }

    public function spaceHavePolicies(){
        return $this->hasMany(SpaceHaveCompanyPolicy::class);
    }
}
