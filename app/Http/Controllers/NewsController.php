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

  public function show($id){
    return News::findOrFail($id);
  }

  public function store(Request $request){
    foreach ($request->topic_id as $topicId) {
      if (!Topic::find($topicId)) return "Topic Is Invalid";
    }
    $news = News::create($request->all());
    $news->Topic()->sync($request->topic_id);
    return "$request->title is success to submit";
  }

  public function update($id, Request $request){
    foreach ($request->topic_id as $topicId) {
      if (!Topic::find($topicId)) return "Topic Is Invalid";
    }
    $news = News::findOrFail($id);
    $news = $news->fill($request->all());
    $news->save();
    $news->Topic()->sync($request->topic_id);
    if ($news) return "success";
    return "some error";
  }
}
