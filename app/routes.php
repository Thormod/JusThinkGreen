<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/','HomeController@home');
Route::resource('posts','PostController');

Route::get('busqueda', 'PostController@search');

//REGISTRO
Route::get('registrar','UserController@create');
Route::post('registrar','UserController@store');

//LOGIN
Route::get('login_index','UserController@login_index');
Route::post('login','UserController@login');

//LOGOUT
Route::get('logout', 'UserController@logout');

Route::resource('post', 'PostController');

