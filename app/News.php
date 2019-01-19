<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
  use SoftDeletes;

  protected $fillable = ['title', 'content'];

  public function Topic(){
    return $this->belongsToMany('App\Topic', 'news_topic');
  }

  public function scopeDraft($query){
    return $query->where('publish_at', '>', Carbon::now());
  }

  public function scopePublish($query){
    return $query->where('publish_at', '<=', Carbon::now());
  }

  public function scopeDeleted($query){
    return $query->onlyTrashed();
  }
}
