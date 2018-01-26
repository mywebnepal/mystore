<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EventViewCount extends Model
{
    protected $table = 'event_view_counts';
    protected $fillable = ['event_id', 'viewCount'];
}
