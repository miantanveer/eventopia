<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\SpaceType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            SpaceTypeSeeder::class,
            ParkingOptionSeeder::class,
            UserSeeder::class,
            SafetyMeasureSeeder::class,
            CancellationPolicySeeder::class,
            ActivitiesSeeder::class,
            SpaceAmenitySeeder::class,
            SubActivitiesSeeder::class,
            ActivityHaveAmenitySeeder::class,
            AgeSeeder::class,
            ServiceCategorySeeder::class,
            ServiceTitleSeeder::class,
            CompanyPolicySeeder::class,
            EntAmenitySeeder::class,
            EntActivitiesSeeder::class,
            EntSubActivitySeeder::class,
            EntHavingAmenitiesSeeder::class,
            LanguageSeeder::class,
        ]);
    }
}
