<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->string('bookingCode');
            $table->boolean('isUser');
            $table->string('nickName');
            $table->string('email');
            $table->string('phone');
            $table->string('ticket');
            $table->string('rate');
            $table->string('tax');
            $table->string('payId');
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
        Schema::dropIfExists('event_bookings');
    }
}
