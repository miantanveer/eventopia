<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpaceHavingActivity extends Model
{
    use HasFactory;

    protected $fillable=[
        'space_id',
        'space_activity_id',
        'rate_per_hour',
        'minimum_hour',
        'discount',
        'cleaning_fee',
        'instant_booking',
        'max_guests'
    ];

    public function activities(){
        return $this->belongsTo(SpaceActivity::class,'space_activity_id');
    }

    // public function spaceHaveActivityHaveAmenity(){
    //     return $this->hasMany(SpaceActivityAmenity::class);
    // }

    public function spaceAmenities(): BelongsToMany
    {
        return $this->belongsToMany(SpaceAmenity::class,'space_activity_amenities');
    }

}
