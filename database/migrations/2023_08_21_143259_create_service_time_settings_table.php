<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTimeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_time_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('monday')->nullable();
            $table->string('tuesday')->nullable();
            $table->string('wednesday')->nullable();
            $table->string('thursday')->nullable();
            $table->string('friday')->nullable();
            $table->string('saturday')->nullable();
            $table->string('sunday')->nullable();
            $table->string('monday_radio')->nullable();
            $table->string('tuesday_radio')->nullable();
            $table->string('wednesday_radio')->nullable();
            $table->string('thursday_radio')->nullable();
            $table->string('friday_radio')->nullable();
            $table->string('saturday_radio')->nullable();
            $table->string('sunday_radio')->nullable();
            $table->string('monday_start_time')->nullable();
            $table->string('monday_end_time')->nullable();
            $table->string('tuesday_start_time')->nullable();
            $table->string('tuesday_end_time')->nullable();
            $table->string('wednesday_start_time')->nullable();
            $table->string('wednesday_end_time')->nullable();
            $table->string('thursday_start_time')->nullable();
            $table->string('thursday_end_time')->nullable();
            $table->string('friday_start_time')->nullable();
            $table->string('friday_end_time')->nullable();
            $table->string('saturday_start_time')->nullable();
            $table->string('saturday_end_time')->nullable();
            $table->string('sunday_start_time')->nullable();
            $table->string('sunday_end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_time_settings');
    }
}
