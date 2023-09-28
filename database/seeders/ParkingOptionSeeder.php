<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParkingOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ParkingOption::create(['option' => 'Paid onsite parking']);
        \App\Models\ParkingOption::create(['option' => 'Free onsite parking']);
        \App\Models\ParkingOption::create(['option' => 'Free street parking']);
        \App\Models\ParkingOption::create(['option' => 'Valet']);
        \App\Models\ParkingOption::create(['option' => 'Metered street parking ']);
        \App\Models\ParkingOption::create(['option' => 'Nearby parking lot']);
    }
}
