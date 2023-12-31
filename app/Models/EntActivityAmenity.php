<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntActivityAmenity extends Model
{
    use HasFactory;

    protected $fillable = ['ent_amenity_id','entertainment_activity_id'];

    public function activity()
    {
        return $this->belongsTo(EntAmenity::class,'ent_amenity_id');
    }
    public function activityAmenties()
    {
        return $this->belongsTo(EntActivity::class,'entertainment_activity_id');
    }
}
