<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceHavingActivity extends Model
{
    use HasFactory;

    public function spaceHaveAmenties(){
        return $this->hasMany(SpaceHavingAmenity::class);
    }
}
