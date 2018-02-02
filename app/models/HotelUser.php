<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HotelUser extends Model
{
    protected $table = 'hotel_users';
    protected $fillable = ['user_id', 'hotelName', 'hotelAddr', 'status'];

    
}
