<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Topic;
use App\News;

class NewsController extends Controller
{
  public function index(){
    return News::with('Topic')->get();
  }

  public function store(Request $request){
    foreach ($request->topic_id as $topicId) {
      if (!Topic::find($topicId)) return "Topic Is Invalid";
    }
    $news = News::create($request->all());
    $news->Topic()->sync($request->topic_id);
    return "$request->title is success to submit";
  }
}
