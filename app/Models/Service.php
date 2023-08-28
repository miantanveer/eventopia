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

    public function operatingDay(){
        return $this->hasMany(OperatingDay::class);
    }
}
