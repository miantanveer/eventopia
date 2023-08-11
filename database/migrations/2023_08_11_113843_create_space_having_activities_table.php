<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaceHavingActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('space_having_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('space_activity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('rate_per_hour');
            $table->bigInteger('minimum_hour');
            $table->string('discount')->nullable();
            $table->bigInteger('cleaning_fee');
            $table->enum('instant_booking', [1, 2])->default(2)->comment = "1 => Everyone, 2 => No One";
            $table->bigInteger('max_guests');
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
        Schema::dropIfExists('space_having_activities');
    }
}
