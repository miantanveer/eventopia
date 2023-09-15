<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntertainmentActivity;

class EntertainmentActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntertainmentActivity::create( [
            'entertainment_id'=>1,
            'ent_activity_id'=>1,
            'hourly_rate'=>'60',
            'max_hours'=>'56',
            'discount'=>'77',
            'join'=>'no one',
            'guest_capacity'=>'58',
            'created_at'=>'2023-09-12 02:13:44',
            'updated_at'=>'2023-09-12 02:13:44'
            ] );
            
            
                        
            EntertainmentActivity::create( [
            'entertainment_id'=>2,
            'ent_activity_id'=>2,
            'hourly_rate'=>'78',
            'max_hours'=>'49',
            'discount'=>'45',
            'join'=>'no one',
            'guest_capacity'=>'27',
            'created_at'=>'2023-09-12 02:15:33',
            'updated_at'=>'2023-09-12 02:15:33'
            ] );
            
            
                        
            EntertainmentActivity::create( [
            'entertainment_id'=>3,
            'ent_activity_id'=>2,
            'hourly_rate'=>'27',
            'max_hours'=>'41',
            'discount'=>'61',
            'join'=>'everyone',
            'guest_capacity'=>'43',
            'created_at'=>'2023-09-12 02:18:04',
            'updated_at'=>'2023-09-12 02:18:04'
            ] );
            
            
                        
            EntertainmentActivity::create( [
            'entertainment_id'=>4,
            'ent_activity_id'=>2,
            'hourly_rate'=>'62',
            'max_hours'=>'64',
            'discount'=>'7',
            'join'=>'everyone',
            'guest_capacity'=>'83',
            'created_at'=>'2023-09-12 02:19:42',
            'updated_at'=>'2023-09-12 02:19:42'
            ] );
            
            
                        
            EntertainmentActivity::create( [
            'entertainment_id'=>5,
            'ent_activity_id'=>1,
            'hourly_rate'=>'58',
            'max_hours'=>'69',
            'discount'=>'55',
            'join'=>'everyone',
            'guest_capacity'=>'13',
            'created_at'=>'2023-09-12 02:21:56',
            'updated_at'=>'2023-09-12 02:21:56'
            ] );
            
            
                        
            EntertainmentActivity::create( [
            'entertainment_id'=>6,
            'ent_activity_id'=>3,
            'hourly_rate'=>'67',
            'max_hours'=>'65',
            'discount'=>'13',
            'join'=>'no one',
            'guest_capacity'=>'86',
            'created_at'=>'2023-09-12 02:23:06',
            'updated_at'=>'2023-09-12 02:23:06'
            ] );
    }
}
