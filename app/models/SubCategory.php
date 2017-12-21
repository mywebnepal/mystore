<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   protected $table = 'sub_categories';
   protected $fillable = ['categories_id', 'name', 'slug'];

   public function categories()
    {
      return $this->belongsTo(category::class);
    }
}
