<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['products_id', 'comment', 'status', 'email'];

    public function products()
    {
      return $this->belongsTo(Product::class);
    }
}
