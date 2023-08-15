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
            $table->foreignId('cancellation_policy_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('parking_description')->nullable();
            $table->string('security_devices_description')->nullable();
            $table->string('space_title')->nullable();
            $table->string('space_description')->nullable();
            $table->bigInteger('space_size')->nullable()->comment = "sq m";
            $table->string('space_rules')->nullable();
            $table->string('wifi_password')->nullable();
            $table->string('arrival_instruction')->nullable();
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
