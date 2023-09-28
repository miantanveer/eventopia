<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'space_id',
        'image'
    ];
}
