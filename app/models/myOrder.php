<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    protected $table    = 'my_orders';
    protected $fillable = ['products_id', 'product_name', 'order_id', 'quantity', 'discount', 'price', 'users_id', 'address', 'phone'];
}
