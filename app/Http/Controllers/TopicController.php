<?php

namespace App\Http\Controllers;
use App\Topic;

class TopicController extends Controller
{
  public function index(){
    return Topic::all();
  }

  public function show($id){
    $topic = Topic::with('News')->find($id);
    if (!$topic) return "Not Found";
    return $topic;
  }
}
