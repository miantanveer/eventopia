<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'space_id',
        'service_id',
        'entertainment_id',
        'title',
        'start_time',
        'end_time',
        'all_day',
    ];

}
