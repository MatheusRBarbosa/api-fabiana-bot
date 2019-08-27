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
    //Groups routes
    $router->get('', ['uses' => 'GroupController@getAll']);
    $router->get('{id}', ['uses' => 'GroupController@getOne']);
    $router->post('', ['uses' => 'GroupController@create']);
    $router->put('{id}', ['uses' => 'GroupController@update']);
    $router->delete('{id}', ['uses' => 'GroupController@delete']);

    // Groups/sessions routes

    //$router->get('', ['uses' => 'SessionController@getAll']);
    $router->get('{id}/sessions', ['uses' => 'SessionController@getOne']);
    $router->post('{id}', ['uses' => 'SessionController@create']);
    //$router->put('{id}', ['uses' => 'SessionController@create']);
   
});

