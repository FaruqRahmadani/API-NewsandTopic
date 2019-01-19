<?php

namespace App\Http\Controllers;
use App\Topic;

class TopicController extends Controller
{
  public function index(){
    return Topic::all();
  }
}
