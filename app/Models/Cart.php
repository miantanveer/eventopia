<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function entertainment()
    {
        return $this->belongsTo(Entertainment::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function space()
    {
        return $this->belongsTo(Space::class);
    }
}
