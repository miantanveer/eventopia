<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceActivity extends Model
{
    use HasFactory;

    public function activities(){
        return $this->hasMany(SpaceHavingActivity::class);
    }

    public function subActivities(){
        return $this->hasMany(SpaceSubActivity::class);
    }
}
