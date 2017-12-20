<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class supportForm extends Model
{
    protected  $table = 'support_forms';
    protected  $fillable = ['user_email', 'user_phone', 'user_subject', 'user_message'];
}
