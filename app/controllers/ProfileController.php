<?php

class ProfileController extends BaseController{

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