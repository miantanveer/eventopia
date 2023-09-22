<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceTitle;

class ServiceTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceTitle::insert([
            ['name'=>'Event Planning Companies','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Catering Services','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Audio-Visual and Lighting Companies','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Florists and Decorators','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Photography and Videography','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Entertainment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Event Furniture and Rentals','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Event Technology and App Providers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Event Security Services','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Transportation Services: For transportation and logistics','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
