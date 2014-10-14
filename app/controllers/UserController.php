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
			return Redirect::to('profile');
		}
		else
		{
			return Redirect::to('/')->with('login_errors',true);
		}
	}
}