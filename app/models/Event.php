<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table = 'events';

    public function cities(){
    	return $this->belongsTo(City::class, 'event_city_id');
    }

    public function eventUsers(){
    	return $this->belongsTo('App\User', 'event_users');
    }
}
