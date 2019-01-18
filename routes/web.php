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

$router->get('/', function () use ($router) {
  return $router->app->version();
});

$router->group(['prefix' => 'news'], function () use ($router) {
  $router->get('', 'NewsController@index');
  $router->get('{id}', 'NewsController@show');
  $router->post('', 'NewsController@store');
  $router->put('{id}', 'NewsController@update');
});
