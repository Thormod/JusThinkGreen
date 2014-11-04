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

		$userProfile = new UserProfile();
		$userProfile->id = $user->id;
		$userProfile->user_id = $user->id;
		$userProfile->points = 0;
		$userProfile->save();

	return Redirect::to('registrar')->with('success', 'Te has registrado exitosamente.');
	}
	public function login_index(){

		return View::make('login', array('tab' => 'login') );

	}

	public function show()
	{
		if(Auth::check())
		{
		$id = Auth::user()->id;
		$user = User::find($id);
	
		if($user){
			$user_profile = UserProfile::find($id);
			$posts = Post::where('user_id', '=', $id)->orderBy('point')->take(5)->get();
		    return View::make('user.show', ['user' => $user, 'userProfile' => $user_profile, 'posts' => $posts]);
		}else{
			return View::make('error')->with('tab','error');

			
		}

	}

	public function edit()
	{

		if(Auth::check())
		{
			$profile = UserProfile::find(Auth::User()->id);
			return View::make('user.edit', ['profile' => $profile]);
		}else{
			return Redirect::to('login_index');
		}
	}

	public function storeProfile()
	{

		if(Auth::check())
		{
			$validation = Validator::make(Input::all(), UserProfile::$rules);

			if($validation->fails())
			{
				return Redirect::Back()->withInput()->withErrors($validation);
			}

			$profile = UserProfile::find(Auth::User()->id);
			$profile->first_name = Input::get('first_name');
			$profile->last_name = Input::get('last_name');
			$profile->save();
			return Redirect::to(("user/{$profile->id}"));
		}else{
			return Redirect::to('login_index');
		}
	}
	


}