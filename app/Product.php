<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'price','description', 'image', 'color_id', 'size_id', 'category_id'];

  public function getName()
  {
    return $this->name;
  }

  public function colors()
	{
		return $this->belongsToMany(Color::class)->withTimestamps();
	}

  public function sizes()
	{
		return $this->belongsToMany(Size::class)->withTimestamps();
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}


}
