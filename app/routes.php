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
Route::resource('posts','PostController', array('except' =>array('create')));

//POSTS
Route::get('publicar','PostController@create');
Route::post('publicar','PostController@store');

//Busqueda publicaciones
Route::get('busqueda', 'PostController@search');

//User profile

Route::get('user', 'UserController@show');
Route::get('user/profile/edit', 'UserController@edit');
Route::post('user/profile/edit', array('as' => 'user.storeProfile', 'uses' => 'UserController@storeProfile'));


//REGISTRO
Route::get('registrar','UserController@create');
Route::post('registrar','UserController@store');

//LOGIN
Route::get('login_index','UserController@login_index');
Route::post('login','UserController@login');

//LOGOUT
Route::get('logout', 'UserController@logout');


//PAGE
Route::get('contacto', 'HomeController@contact');
Route::get('about', 'HomeController@about');
Route::resource('post', 'PostController');

