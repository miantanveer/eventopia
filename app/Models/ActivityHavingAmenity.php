<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityHavingAmenity extends Model
{
    use HasFactory;

    public function amenities(){
        return $this->hasMany(SpaceAmenity::class,'id');
    }
}
