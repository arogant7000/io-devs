<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Posts extends Model
{
  protected $fillable = [
      'slug', 'name', 'title', 'author_id', 'seo_title', 'excerpt', 'body', 'image', 'slug', 'meta_description', 'meta_keywords', 'status', 'featured',
  ];

  public function save(array $options = [])
  {
      // If no author has been assigned, assign the current user's id as the author of the post
      if (!$this->author_id && Auth::user()) {
          $this->author_id = Auth::user()->id;
      }

      parent::save();
  }

  public function comments(){
    return $this->hasMany('App\Comment','on_post');
  }
  public function author(){
    return $this->belongsTo('App\User','author_id');
  }
  public function categories()
  {
    return $this->belongsTo('App\Categories','category_id');
  }

  //public function author_id(){      return $this->belongsTo(User::class);  }
}
