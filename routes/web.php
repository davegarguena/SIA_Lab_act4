<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/dave',['uses' => 'UserController@getUsers']);


$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/dave',['uses' => 'UserController@getUser']); //get all users

$router->get('/gdave/{id}', 'UserController@show'); // get user by id

$router->post('/adave', 'UserController@add'); // create new user record

$router->put('/udave/{id}', 'UserController@update'); // update user record

$router->delete('/ddave/{id}', 'UserController@delete'); // delete record


