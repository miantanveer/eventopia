<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingOption extends Model
{
    use HasFactory;

    public function parkingOptions(){
        return $this->hasMany(SpaceHavingParkingOption::class);
    }
}
