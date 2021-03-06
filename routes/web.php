<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('', 'HomeController@index');

$router->group(['prefix' => 'news'], function () use ($router) {
  $router->get('', 'NewsController@index');
  $router->get('filter/{filter}', 'NewsController@filter');
  $router->get('{id}', 'NewsController@show');
  $router->post('', 'NewsController@store');
  $router->put('{id}', 'NewsController@update');
  $router->delete('{id}', 'NewsController@delete');
});

$router->group(['prefix' => 'topic'], function () use ($router) {
  $router->get('', 'TopicController@index');
  $router->get('{id}', 'TopicController@show');
  $router->post('', 'TopicController@store');
  $router->put('{id}', 'TopicController@update');
  $router->delete('{id}', 'TopicController@delete');
});
