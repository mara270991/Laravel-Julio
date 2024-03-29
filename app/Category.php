<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function category()
  {
    return $this->hasMany(Product::class,'category_id', 'id');
  }
}
