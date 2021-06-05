<?php
/** @var \Laravel\Lumen\Routing\Router $router */
/*
|---------------------------------------------------------------------
-----
| Application Routes
|---------------------------------------------------------------------
-----
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () use ($router) {
 return $router->app->version();
}); //this will point to your local directory
// unsecure routes 
$router->group(['prefix' => 'api'], function () use ($router) {
 $router->get('/users',['uses' => 'UserController@getUsers']);
});
 // more simple routes
 $router->get('/users', 'UserController@index'); //get all users record
 $router->post('/users', 'UserController@add'); //create new users record
 $router->get('/users/{id}', 'UserController@show'); //get new users by id record
 $router->put('/users/{id}', 'UserController@update'); //update user record
 $router->patch('/users/{id}', 'UserController@update'); //update user record
 $router->delete('/users/{id}', 'UserController@delete'); //delete record

 $router->get('/usersjob', 'UserJobController@index'); 
 $router->get('/userjob/{id}', 'UserJobController@show'); // get user by id


?> 