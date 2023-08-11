<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancellationPolicy extends Model
{
    use HasFactory;

    public function cancellationPolicy(){
        return $this->hasOne(CancellationPolicy::class);
    }
}
