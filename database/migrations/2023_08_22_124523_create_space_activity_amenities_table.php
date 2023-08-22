<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaceActivityAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('space_activity_amenities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_amenity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('space_having_activity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('space_activity_amenities');
    }
}
