<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceHavingActivity extends Model
{
    use HasFactory;

    public function activities(){
        return $this->hasMany(SpaceActivity::class);
    }

    public function spaceHaveActivityHaveAmenity(){
        return $this->hasMany(SpaceActivityAmenity::class);
    }
}
