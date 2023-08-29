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
        'cancellation_policy',
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
    public function entHaveActivities()
    {
        return $this->hasMany(EntertainmentActivity::class);
    }

    public function blockTime(){
        return $this->hasMany(BlockTime::class);
    }
}
