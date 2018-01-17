<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name', 'slug', 'desc'];

    public function hotels(){
    	return $this->belongsTo(Hotel::class);
    }

    public function events(){
    	return $this->belongsTo(Event::class);
    }
}
