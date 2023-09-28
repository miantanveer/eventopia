<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\EntHavingActivity;
use App\Models\EntSubActivity;
use App\Models\EntAmenity;

class EntActivity extends Model
{
    use HasFactory;
    public function subActivities(){
        return $this->hasMany(EntSubActivity::class);
    }

    public function entAmenities(): BelongsToMany
    {
        return $this->belongsToMany(EntAmenity::class,'ent_having_amenities');
    }
}
