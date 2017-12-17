<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $table    = 'brands';
    protected $fillable = ['name', 'slug', 'desc', 'brand_logo'];

    public function products()
	{
	  return $this->hasMany(Product::class);
	}
}
