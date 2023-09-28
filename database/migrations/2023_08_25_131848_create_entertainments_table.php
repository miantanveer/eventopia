<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntertainmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ent_activity_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cancellation_policy_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('comedian')->nullable();
            $table->longText('house_rules')->nullable();
            $table->longText('recordings')->nullable();
            $table->string('title')->nullable();
            $table->string('space')->nullable();
            $table->string('age')->nullable();
            $table->longText('arrival')->nullable();
            $table->longText('contact_first_name')->nullable();
            $table->longText('contact_last_name')->nullable();
            $table->longText('contact_num')->nullable();
            $table->longText('image')->nullable();
            $table->longText('eventopia_hear')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('lng')->nullable();
            $table->string('lat')->nullable();
            $table->string('last_steps')->nullable();
            $table->string('status')->default(0)->comment('0=>Pending,1=>Active,2=>Cancelled');
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
        Schema::dropIfExists('entertainments');
    }
}
