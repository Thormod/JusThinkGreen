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
Route::get('user/{user}', 'UserController@show');
Route::post('user/changeimage', array('before' => 'auth', 'as' => 'change_image_user_path', 'uses' => 'UserController@changeImage'));

Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/edit', array('as' => 'userProfile.storeProfile', 'uses' => 'ProfileController@storeProfile'));

//Rankings
Route::get('rankings', 'HomeController@rankings');

//Favorites
Route::get('favoritos', 'FavoriteController@showFavorites');
//Agregar / remover favoritos
Route::post('favoritos', 'FavoriteController@addFavorites');
Route::post('favoritos', 'FavoriteController@removeFavorite');

//REGISTRO
Route::get('registrar','UserController@create');
Route::post('registrar','UserController@store');

Route::get('signUpWithFacebook', 'SocialNetworks@signUpWithFacebook');
Route::get('signUpWithGoogle', 'SocialNetworks@signUpWithGoogle');

//LOGIN
Route::get('login_index','UserController@login_index');
Route::post('login','UserController@login');


Route::get('loginWithFacebook', 'SocialNetworks@loginWithFacebook');
Route::get('loginWithGoogle', 'SocialNetworks@loginWithGoogle');

//LOGOUT
Route::get('logout', 'UserController@logout');


//PAGE
Route::match(array('GET', 'POST'),'search', array('as' => 'searchAll', 'uses' => 'SearchController@searchAll'));
Route::get('contacto', 'HomeController@contact');
Route::get('about', 'HomeController@about');
Route::resource('post', 'PostController');

