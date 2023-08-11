<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceAmenity extends Model
{
    use HasFactory;

    public function spaceAmenities(){
        return $this->hasMany(SpaceHavingAmenity::class);
    }
}
