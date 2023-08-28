<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CompanyPolicy::create(['title' => 'Keep conversations on Eventopia','description' => 'Keep conversations with guests on the platform so everyone knows what was agreed to.']);
        \App\Models\CompanyPolicy::create(['title' => 'Use Eventopia to process payments','description' => 'All payments must be processed on Eventopia and honor our service fee. All payouts will be made via direct deposit to your bank account.']);
        \App\Models\CompanyPolicy::create(['title' => 'Follow the booking, cancellation, and overtime policies','description' => 'All bookings are covered by the Eventopia Services Agreement. Contracts that conflict with these policies are not allowed.']);
        \App\Models\CompanyPolicy::create(['title' => 'Make sure my space meets local regulations','description' => 'Follow local regulations to ensure the safety of your guests, yourself, and your space.']);
    }
}
