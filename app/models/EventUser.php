<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    protected $table = 'event_users';
    protected $fillable = ['organizer_name', 'user_id', 'status'];
}
