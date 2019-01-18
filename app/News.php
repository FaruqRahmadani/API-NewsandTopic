<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  public function Topic(){
    return $this->belongsToMany('App\Topic', 'news_topic');
  }
}
