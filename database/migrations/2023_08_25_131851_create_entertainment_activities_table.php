<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntertainmentActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainment_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entertainment_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ent_activity_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('hourly_rate')->nullable();
            $table->string('max_hours')->nullable();
            $table->string('discount')->nullable();
            $table->string('join')->nullable();
            $table->string('guest_capacity')->nullable();
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
        Schema::dropIfExists('entertainment_activities');
    }
}
