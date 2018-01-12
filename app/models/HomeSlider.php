<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'home_sliders';
    protected $fillable = ['img_path', 'call_action', 'img_caption'];
}
