<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $fillable = ['name', 'room_types_id', 'city', 'address', 'phone', 'email', 'desc', 'img_path', 'vedio_link', 'price'];

    public function rooms(){
        return $this->belongsTo(roomType::class, 'room_types_id');
    }

    public function cities(){
    	return $this->belongsTo(City::class);
    }
}
