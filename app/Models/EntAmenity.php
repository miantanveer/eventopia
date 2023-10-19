<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntAmenity extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    // public function entActivities(): BelongsToMany
    // {
    //     return $this->belongsToMany(EntActivity::class,'activity_having_amenities');
    // }

    public function entActivitiesAmenities()
    {
        return $this->hasMany(EntActivity::class,'entertainment_activity_id');
    }
}
