<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceTeam;

class ServiceTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceTeam::create( [
            'service_id'=>1,
            'team_name'=>'Tempora neque tempor',
            'team_description'=>'Ipsam at perspiciati',
            'image'=>'1694503767-75046.png',
            'created_at'=>'2023-09-12 02:29:27',
            'updated_at'=>'2023-09-12 02:29:27'
            ] );
            
            
                        
            ServiceTeam::create( [
            'service_id'=>2,
            'team_name'=>'Cillum qui lorem lab',
            'team_description'=>'Tenetur natus suscip',
            'image'=>'1694504438-91517.png',
            'created_at'=>'2023-09-12 02:40:39',
            'updated_at'=>'2023-09-12 02:40:39'
            ] );
            
            
                        
            ServiceTeam::create( [
            'service_id'=>3,
            'team_name'=>'Ipsum eiusmod sed in',
            'team_description'=>'Nulla repudiandae id',
            'image'=>'1694504506-96386.png',
            'created_at'=>'2023-09-12 02:41:46',
            'updated_at'=>'2023-09-12 02:41:46'
            ] );
            
            
                        
            ServiceTeam::create( [
            'service_id'=>4,
            'team_name'=>'Ut nisi commodi eius',
            'team_description'=>'Consequuntur quia au',
            'image'=>'1694504569-97972.png',
            'created_at'=>'2023-09-12 02:42:49',
            'updated_at'=>'2023-09-12 02:42:49'
            ] );
            
            
                        
            ServiceTeam::create( [
            'service_id'=>5,
            'team_name'=>'Excepturi est aut a',
            'team_description'=>'Dolores est nisi co',
            'image'=>'1694504621-21819.png',
            'created_at'=>'2023-09-12 02:43:41',
            'updated_at'=>'2023-09-12 02:43:41'
            ] );
            
            
                        
            ServiceTeam::create( [
            'service_id'=>6,
            'team_name'=>'Do beatae ut in qui',
            'team_description'=>'Qui eu amet asperna',
            'image'=>'1694504681-13660.png',
            'created_at'=>'2023-09-12 02:44:41',
            'updated_at'=>'2023-09-12 02:44:41'
            ] );
    }
}
