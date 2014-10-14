<?php

class UserController extends BaseController{

	public function login(){
		$user_data = array(
			'email' => mb_strtolower( trim ( Input::get('email') )), 
			'password' => Input::get('password')
		);

		if(Auth::attempt($user_data))
		{	
			$user_validator = User::where('email',$user_data['email'])->first();
			Session::put('user_id',$user_validator['id']);
			return Redirect::to('/');
		}
		else
		{
			return Redirect::to('login_index')->with('success', 'Hay algún error en los datos');
		}
	}
	public function logout(){
		
    	Auth::logout();
    	return Redirect::to('/');
	}
	public function create()
	{
		return View::make('user.create')->with('tab','registrar');
	}

	public function store()
	{

		$validation = Validator::make(Input::all(), User::$rules);
		
		if ($validation->fails()) {
			return Redirect::to('registrar')->withInput()->withErrors($validation);
		}

		$user = new User(Input::all());
		$user->password=Hash::make(Input::get('password'));
		$user->save();

	return Redirect::to('registrar')->with('success', 'Te has registrado exitosamente.');
	}
	public function login_index(){

		return View::make('login', array('tab' => 'login') );

	}

}