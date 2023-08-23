<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceHavingParkingOption extends Model
{
    use HasFactory;

    protected $fillable=[
        'space_id',
        'parking_option_id',
    ];

}
