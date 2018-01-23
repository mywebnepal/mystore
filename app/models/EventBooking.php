<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    protected $table = 'event_bookings';
    protected $fillable = ['booking_code', 'isUsr', 'niceName', 'email', 'phone', 'eventId', 'ticketName', 'rate', 'tax', 'payId'];
}
