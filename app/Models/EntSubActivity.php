<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntSubActivity extends Model
{
    use HasFactory;
    public function act(){
        return $this->belongsTo(EntActivity::class,'ent_activity_id');
    }
    public function activity(){
        return $this->hasMany(EntertainmentActivity::class,'ent_activity_id');
    }
}
