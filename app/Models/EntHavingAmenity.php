<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntHavingAmenity extends Model
{
    use HasFactory;
    public function activity(){
        return $this->hasMany(EntActivity::class);
    }
    public function amenity(){
        return $this->hasMany(EntAmenity::class);
    }
}
