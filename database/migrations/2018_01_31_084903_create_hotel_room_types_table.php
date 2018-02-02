<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_user_id');
            $table->string('roomName');
            $table->string('bedName');
            $table->string('fitPerson');
            $table->string('fooding');
            $table->string('roomPrice');
            $table->text('roomDesc');
            $table->string('roomImg1');
            $table->string('roomImg2');
            $table->string('roomImg3');
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
        Schema::dropIfExists('hotel_room_types');
    }
}
