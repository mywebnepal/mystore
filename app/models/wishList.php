<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class wishList extends Model
{
    protected $table = 'wish_lists';
    protected $fillable = ['users_id', 'products_id'];

    public function products(){
    	return  $this->belongsTo(Product::class);
    }
}
