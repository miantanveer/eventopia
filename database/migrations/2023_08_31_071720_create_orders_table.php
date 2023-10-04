<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('service_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('entertainment_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('type');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time')->nullable();
            $table->string('amount');
            $table->string('discount')->nullable();
            $table->string('status')->default(0)->comment('0 => pending, 1 => review, 2 => accepted, 3 => cancelled , 4 => completed , 5 => active, 6 => de-active');
            $table->string('is_refunded')->default(0)->comment('0 => NO, 1 => Yes');
            $table->string('stripe_card_id')->nullable();
            $table->json('stripe_txn_resp')->nullable()->comment('stripe transasction response.');
            $table->json('refund_resp')->nullable()->comment('stripe transasction response.');
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
        Schema::dropIfExists('orders');
    }
}
