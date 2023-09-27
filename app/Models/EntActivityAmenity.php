<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntActivityAmenity extends Model
{
    use HasFactory;
    public function activity()
    {
        return $this->belongsTo(EntAmenity::class,'ent_amenity_id');
    }
}
