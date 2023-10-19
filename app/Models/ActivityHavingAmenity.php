<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityHavingAmenity extends Model
{
    use HasFactory;

    public function space_amenity() {
        return $this->belongsTo(SpaceAmenity::class); 
    }

    public function space_activity() {
        return $this->belongsTo(SpaceActivity::class); 
    }
    
}
