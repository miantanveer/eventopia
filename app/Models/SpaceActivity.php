<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpaceActivity extends Model
{
    use HasFactory;

    public function activities(){
        return $this->hasMany(SpaceHavingActivity::class);
    }

    public function subActivities(){
        return $this->hasMany(SpaceSubActivity::class);
    }

    public function spaceAmenities(): BelongsToMany
    {
        return $this->belongsToMany(SpaceAmenity::class,'activity_having_amenities');
    }
}
