<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'stripe_txn_resp'
    ];

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
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
