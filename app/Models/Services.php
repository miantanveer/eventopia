<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceImages;
use App\Models\ServiceTeam;
class Services extends Model
{
    use HasFactory;

    public function serviceImages(){
        return $this->hasMany(ServiceImages::class);
    }

    public function serviceTeam(){
        return $this->hasOne(ServiceTeam::class);
    }

}
