<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

  public function store(Request $request){
    $topic = Topic::create($request->all());
    if ($topic) return "Success";
    return "Error";
  }
}
