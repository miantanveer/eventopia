<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpaceAmenity extends Model
{
    use HasFactory;

    public function spaceActivities(): BelongsToMany
    {
        return $this->belongsToMany(SpaceActivity::class,'activity_having_amenities');
    }

    public function spaceActivitiesAmenities(): BelongsToMany
    {
        return $this->belongsToMany(SpaceHavingActivity::class,'space_activity_amenities');
    }
}
