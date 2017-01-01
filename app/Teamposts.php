<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Teamposts extends Model
{
  protected $fillable = [
      'slug', 'name', 'title', 'author_id', 'body', 'image', 'slug',
  ];

  public function save(array $options = [])
  {
      // If no author has been assigned, assign the current user's id as the author of the post
      if (!$this->author_id && Auth::user()) {
          $this->author_id = Auth::user()->id;
      }

      parent::save();
  }

  public function author_id()
  {
      return $this->belongsTo(User::class);
  }
}
