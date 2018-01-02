<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class roomType extends Model
{
    protected $table = 'room_types';
    protected $fillable = ['name', 'slug', 'desc'];

}
