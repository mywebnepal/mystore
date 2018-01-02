<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ViewProduct extends Model
{
    protected $table = 'view_products';
    protected $fillable = ['products_id', 'count'];

    public function products(){
    	
    }
}
