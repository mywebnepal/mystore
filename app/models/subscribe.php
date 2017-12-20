<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    protected $table = 'subscribes';
    protected $fillable = ['email'];
}
