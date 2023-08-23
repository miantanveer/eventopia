<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPolicy extends Model
{
    use HasFactory;

    public function companyPolicies(){
        return $this->hasMany(SpaceHaveCompanyPolicy::class);
    }
}
