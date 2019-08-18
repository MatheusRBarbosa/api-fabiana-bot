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


$router->group(['prefix' => 'groups'], function () use ($router){
    $router->get('', ['uses' => 'GroupController@getAll']);
    $router->get('{id}', ['uses' => 'GroupController@getOne']);
    $router->post('', ['uses' => 'GroupController@create']);
    $router->put('{id}', ['uses' => 'GroupController@update']);
});

