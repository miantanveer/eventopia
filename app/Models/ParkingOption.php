<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ParkingOption extends Model
{
    use HasFactory;

    public function spaces(): BelongsToMany
    {
        return $this->belongsToMany(Space::class,'space_having_parking_options');
    }
}
