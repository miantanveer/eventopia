<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpaceHaveCompanyPolicy;

class SpaceHaveCompanyPoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpaceHaveCompanyPolicy::create( [
            'space_id'=>1,
            'company_policy_id'=>1,
            'created_at'=>'2023-09-12 01:58:41',
            'updated_at'=>'2023-09-12 01:58:41'
            ] );
                        
            SpaceHaveCompanyPolicy::create( [
            'space_id'=>1,
            'company_policy_id'=>2,
            'created_at'=>'2023-09-12 01:58:41',
            'updated_at'=>'2023-09-12 01:58:41'
            ] );
                        
            SpaceHaveCompanyPolicy::create( [
            'space_id'=>1,
            'company_policy_id'=>3,
            'created_at'=>'2023-09-12 01:58:41',
            'updated_at'=>'2023-09-12 01:58:41'
            ] );
                        
            SpaceHaveCompanyPolicy::create( [
            'space_id'=>1,
            'company_policy_id'=>4,
            'created_at'=>'2023-09-12 01:58:41',
            'updated_at'=>'2023-09-12 01:58:41'
            ] );
    }
}
