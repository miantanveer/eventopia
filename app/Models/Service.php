<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function serviceImages(){
        return $this->hasMany(ServiceImages::class);
    }

    public function serviceTeam(){
        return $this->hasOne(ServiceTeam::class);
    }

    public function operatingDays(){
        return $this->hasMany(OperatingDay::class);
    }

    public function blockTime(){
        return $this->hasMany(BlockTime::class);
    }
}
