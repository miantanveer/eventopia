<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('space_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cancellation_policy_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('lat');
            $table->string('lng');
            $table->string('parking_description')->nullable();
            $table->string('security_devices_description')->nullable();
            $table->string('space_title');
            $table->string('space_description');
            $table->bigInteger('space_size')->comment = "sq m";
            $table->string('space_rules');
            $table->string('wifi_password')->nullable();
            $table->string('arrival_instruction');
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
        Schema::dropIfExists('spaces');
    }
}
