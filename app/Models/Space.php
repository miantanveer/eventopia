<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

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
}
