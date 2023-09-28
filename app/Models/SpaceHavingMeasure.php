<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceHavingMeasure extends Model
{
    use HasFactory;
    protected $fillable=[
        'space_id',
        'safety_measure_id',
    ];
}
