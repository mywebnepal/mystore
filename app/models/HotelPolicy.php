<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HotelPolicy extends Model
{
    protected $table = 'hotel_policies';
    protected $fillable = ['hotel_id', 'policyName'];
}
