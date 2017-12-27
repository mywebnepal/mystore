<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    protected $table = 'notice_boards';
    protected $fillable = ['name', 'slug', 'desc', 'img_path', 'end_date'];
}
