<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SafetyMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'The space is cleaned and disinfected in accordance with guidelines from local health authorities']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'High touch surfaces and shared amenities have been disinfected']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Soft, porous materials have been properly cleaned or removed']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'A licensed professional cleaner is hired between bookings']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Bookings are spaced apart to allow for enhanced cleaning']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Disinfecting wipes or spray and paper towels']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Disposable gloves']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Disposable masks / face coverings']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Hand Sanitizer']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Capacity is limited based on governmental guidelines']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Space has access to outdoor air ventilation']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Space has HEPA-certified air filters']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Space has additional space outdoors']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Space has been reconfigured to allow for physical distance']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Detailed checklist of updated cleaning procedure. Download checklist']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'COVID-19 guest guidelines print outs. Download guidelines']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Common areas have 6-foot (2-metre) markers on floors']);
        \App\Models\SafetyMeasure::create(['safety_measure_options' => 'Narrow passages have arrows for bi-directional traffic']);
    }
}
