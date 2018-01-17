<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_users');
            $table->string('event_title');
            $table->string('event_city');
            $table->string('event_email');
            $table->string('event_vanue_addr');
            $table->string('event_phone');
            $table->string('event_start_date');
            $table->string('event_end_date');
            $table->text('event_desc');
            $table->string('event_map');
            $table->string('event_featured_img');
            $table->text('event_google_map');
            $table->string('event_ticket');
            $table->string('event_capacity');
            $table->string('event_status');
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
        Schema::dropIfExists('events');
    }
}
