<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home(){
		return View::make('home', array('tab' => 'homr') );
	}
	public function contact(){
		return View::make('contact', array('tab' => 'contact') );
	}
	public function about(){
		return View::make('about', array('tab' => 'about') );
	}

	public function rankings(){
		//Top 10 usuarios
		$top10user = UserProfile::orderBy('points', 'desc')->take(10)->get();

		//Top 10 mejores publicaciones - Todo el tiempo
		$top10post = Post::orderBy('point', 'desc')->take(10)->get();
		//Top 10 mejores publicaciones - Mes
		$top10month = Post::where('created_at', '>=', new DateTime('-1 months'))->orderBy('point', 'desc')->take(10)->get();
		//Top 10 mejores publicaciones - Mes
		$top10week = Post::where('created_at', '>=', new DateTime('-1 weeks'))->orderBy('point', 'desc')->take(10)->get();

		return View::make('ranking', ['top10user'=>$top10user, 'top10post'=>$top10post, 
									  'top10month'=>$top10month, 'top10week'=>$top10week]);
	}
}
