<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  use SoftDeletes;
  
  protected $fillable = ['title', 'content'];

  public function Topic(){
    return $this->belongsToMany('App\Topic', 'news_topic');
  }
}
