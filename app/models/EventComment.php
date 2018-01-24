<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    protected $table = 'event_comments';
    protected $fillable = ['event_id', 'nickName','phone', 'email', 'event_comment','status'];

    public function events(){
        return $this->belongsTo(Event::class, 'event_id');
    }
}
