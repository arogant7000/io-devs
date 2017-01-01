<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model
{
  protected $table = 'categories';

  protected $fillable = ['slug', 'name'];

  public function posts()
  {
      return $this->hasMany(Posts::class)
          ->where('status', '=', 'PUBLISHED')
          ->orderBy('created_at', 'DESC');
  }
}
