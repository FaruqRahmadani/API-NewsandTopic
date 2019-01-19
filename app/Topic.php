<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  protected $table = 'topic';

  protected $hidden = ['pivot'];

  protected $fillable = ['name'];

  public function News(){
    return $this->belongsToMany('App\News');
  }

  public function getNewsCountAttribute(){
    return $this->News()->count();
  }
}
