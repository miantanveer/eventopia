<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingDay extends Model
{
    use HasFactory;

    public function operatingHours(){
        return $this->hasMany(OperatingHour::class);
    }
}
