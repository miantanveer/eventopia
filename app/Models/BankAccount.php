<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'user_id',
        'bank_name',
        'account_number',
        'swift_code',
        'bank_address',
        'account_title',
        'bank_status',
        'account_type',
    ];

    function country()
    {
        return $this->belongsTo(Country::class);
    }
}
