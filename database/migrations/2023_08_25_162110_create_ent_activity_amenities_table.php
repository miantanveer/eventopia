<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntActivityAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ent_activity_amenities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ent_amenity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('entertainment_activity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('ent_activity_amenities');
    }
}
