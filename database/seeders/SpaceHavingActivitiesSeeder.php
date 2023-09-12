<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpaceHavingActivity;

class SpaceHavingActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpaceHavingActivity::create( [
            'space_id'=>1,
            'space_activity_id'=>1,
            'rate_per_hour'=>22,
            'minimum_hour'=>51,
            'discount'=>'63',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'no one',
            'max_guests'=>9,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>1,
            'space_activity_id'=>2,
            'rate_per_hour'=>45,
            'minimum_hour'=>47,
            'discount'=>'92',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'no one',
            'max_guests'=>16,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>1,
            'space_activity_id'=>3,
            'rate_per_hour'=>68,
            'minimum_hour'=>94,
            'discount'=>'99',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'no one',
            'max_guests'=>12,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>2,
            'space_activity_id'=>3,
            'rate_per_hour'=>28,
            'minimum_hour'=>53,
            'discount'=>'76',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'everyone',
            'max_guests'=>35,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>3,
            'space_activity_id'=>2,
            'rate_per_hour'=>79,
            'minimum_hour'=>35,
            'discount'=>'48',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'everyone',
            'max_guests'=>80,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>4,
            'space_activity_id'=>3,
            'rate_per_hour'=>63,
            'minimum_hour'=>68,
            'discount'=>'63',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'everyone',
            'max_guests'=>33,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>5,
            'space_activity_id'=>2,
            'rate_per_hour'=>92,
            'minimum_hour'=>60,
            'discount'=>'90',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'no one',
            'max_guests'=>31,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
            
            
                        
            SpaceHavingActivity::create( [
            'space_id'=>6,
            'space_activity_id'=>1,
            'rate_per_hour'=>32,
            'minimum_hour'=>55,
            'discount'=>'20',
            'cleaning_fee'=>NULL,
            'instant_booking'=>'no one',
            'max_guests'=>48,
            'created_at'=>now(),
            'updated_at'=>now()
            ] );
    }
}
