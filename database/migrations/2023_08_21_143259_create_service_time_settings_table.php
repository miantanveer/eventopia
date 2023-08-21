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
            $table->string('monday')->default(0);
            $table->string('tuesday')->default(0);
            $table->string('wednesday')->default(0);
            $table->string('thursday')->default(0);
            $table->string('friday')->default(0);
            $table->string('saturday')->default(0);
            $table->string('sunday')->default(0);
            $table->string('monday_radio')->default(0);
            $table->string('tuesday_radio')->default(0);
            $table->string('wednesday_radio')->default(0);
            $table->string('friday_radio')->default(0);
            $table->string('saturday_radio')->default(0);
            $table->string('sunday_radio')->default(0);
            $table->string('monday_start_time')->default(0);
            $table->string('monday_end_time')->default(0);
            $table->string('tuesday_start_time')->default(0);
            $table->string('tuesday_end_time')->default(0);
            $table->string('wednesday_start_time')->default(0);
            $table->string('wednesday_end_time')->default(0);
            $table->string('thursday_start_time')->default(0);
            $table->string('thursday_end_time')->default(0);
            $table->string('friday_start_time')->default(0);
            $table->string('friday_end_time')->default(0);
            $table->string('saturday_start_time')->default(0);
            $table->string('saturday_end_time')->default(0);
            $table->string('sunday_start_time')->default(0);
            $table->string('sunday_end_time')->default(0);
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
