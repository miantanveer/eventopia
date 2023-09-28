<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntertainmentType;

class EntertainmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntertainmentType::insert([
            ['name'=>'Live Music','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Dance Performances','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Comedy and Entertainment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Visual and Performing Arts','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Variety Acts','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Acrobats and aerialists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Interactive Entertainment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Celebrity or Special Guest Appearances','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Technological Entertainment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Kids Entertainment','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
