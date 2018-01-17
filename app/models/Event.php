<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table = 'events';

    public function cities(){
    	return $this->belongsTo(City::class);
    }
}
