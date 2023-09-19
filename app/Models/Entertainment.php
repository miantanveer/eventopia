<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    protected $fillable = [
        'user_id',
        'ent_activity_id',
        'comedian',
        'house_rules',
        'recordings',
        'title',
        'space',
        'age',
        'arrival',
        'cancellation_policy_id',
        'contact_first_name',
        'contact_last_name',
        'contact_num',
        'image',
        'eventopia_hear',
        'last_steps',
        'status',
    ];
    use HasFactory;

    public function entertainmentImages()
    {
        return $this->hasMany(EntertainmentImages::class);
    }

    public function entertainmentActivities()
    {
        return $this->hasMany(EntertainmentActivity::class);
    }

    public function operatingDays()
    {
        return $this->hasMany(OperatingDay::class);
    }

    public function blockTime(){
        return $this->hasMany(BlockTime::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cancellationPolicy(){
        return $this->belongsTo(CancellationPolicy::class, 'cancellation_policy_id');
    }
}
