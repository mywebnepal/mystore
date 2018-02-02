<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomType extends Model
{
    protected $table    = 'hotel_room_types';
    protected $fillable = ['hotel_user_id', 'roomName', 'bedName', 'fitPerson', 'fooding', 'roomPrice', 'roomDesc', 'roomImg1', 'roomImg2', 'roomImg3'];
}
