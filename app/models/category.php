<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'description'];

   public function products()
   {
      return $this->hasMany(Product::class);
   }


   public function subCategory(){
   	return $this->belongsTo(SubCategory::class, 'categories_id');
   }

    
}
