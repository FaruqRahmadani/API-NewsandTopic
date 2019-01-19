<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  protected $table = 'topic';

  protected $hidden = ['created_at', 'pivot', 'updated_at', 'id'];
}
