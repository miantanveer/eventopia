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
            $table->foreignId('space_type_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cancellation_policy_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('allowed_age')->nullable();
            $table->longText('parking_description')->nullable();
            $table->longText('security_devices_description')->nullable();
            $table->text('space_title')->nullable();
            $table->longText('space_description')->nullable();
            $table->string('space_size')->nullable()->comment = "sq m";
            $table->longText('space_rules')->nullable();
            $table->text('wifi_password')->nullable();
            $table->longText('arrival_instruction')->nullable();
            $table->longText('cleaning_process')->nullable();
            $table->string('last_step')->nullable();
            $table->string('c_u_fname')->nullable()->comment = "contact user first name";
            $table->string('c_u_lname')->nullable()->comment = "contact user last name";
            $table->string('c_u_phone')->nullable()->comment = "contact user phone number";
            $table->string('c_u_img')->nullable()->comment = "contact user image";
            $table->enum('status', [0, 1, 2])->default(0)->comment = "0 => Review, 1 => Active, 2 => Rejected";
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
