<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    use HasFactory;
    public function entertainmentImages(){
        return $this->hasMany(EntertainmentImages::class);
    }
    public function entertainmentActivities(){
        return $this->hasMany(EntertainmentActivities::class);
    }
    public function operatingDay(){
        return $this->hasMany(OperatingDay::class);
    }
}
