<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'description'];

    /*public function product(){
    	return belongsToMany('App\product');
    }*/

}
