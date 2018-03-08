<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OpenRoomBooking extends Model
{
    protected $table = 'open_room_bookings';
    protected $fillable = ['dateFrom', 'dateTo', 'roomOnBooking'];
}
