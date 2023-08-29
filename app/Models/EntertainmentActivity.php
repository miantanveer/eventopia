<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntertainmentActivity extends Model
{
    use HasFactory;
    public function entertainment()
    {
        return $this->belongsTo(EntActivity::class,'ent_activity_id');
    }
    public function sub_act()
    {
        return $this->belongsTo(EntSubActivity::class,'ent_activity_id');
    }
    public function entActivityAmenity()
    {
        return $this->belongsTo(EntActivityAmenity::class,'entertainment_activity_id');
    }
    public function ent()
    {
        return $this->belongsTo(Entertainment::class,'entertainment_id');
    }

}
