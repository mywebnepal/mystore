<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','product_slug', 'categories_id', 'description', 'size', 'sku', 'quantity', 'price', 'discount', 'featured', 'brands_id', 'featured_img_sm','featured_img_lg', 'status', 'vedio_link', 'img_path2_sm','img_path2_lg', 'img_path3_sm', 'img_path3_lg'];

    public function categories()
    {
      return $this->belongsTo(category::class);
    }

    public function brands(){
    	return $this->belongsTo(Brand::class);
    }

    public function comments(){
    	return $this->belongsTo(Comment::class);
    }
}
