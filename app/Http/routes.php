<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
 
// Roles
Route::resource('roles', 'RoleController');

// add role - user
Route::get('/users/add/{id}', 'UserController@getAdd');
Route::post('/users/add/{id}','UserController@add');

// Users  
Route::resource('users', 'UserController');

