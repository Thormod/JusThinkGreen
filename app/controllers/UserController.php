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
		$userProfile->save();

	return Redirect::to('login_index')->with('success', 'Te has registrado exitosamente.');
	}
	public function login_index(){

		return View::make('login', array('tab' => 'login') );

	}

	public function show($id)
	{

		$user = User::find($id);
		
		if($user) {

			$user_profile = UserProfile::find($id);
			$posts = Post::where('user_id', '=', $id)->orderBy('point')->take(5)->get();

			$numposts = Post::where('user_id', '==', $user->id);

			$rate = Like::where('user_id', '==', $user->id)->first();

			//logros
			// 1 publicacion
				$pub1 = false;
				if(sizeof($numposts)>=1)
				{
					$pub1 = true;
				}
			// 10 publicaciones
				$pub10 = false;
				if(sizeof($numposts)>=1)
				{
					$pub10 = true;
				}
			// 25 publicaciones
				$pub25 = false;
				if(sizeof($numposts)>=1)
				{
					$pub25 = true;
				}
			// 50 publicaciones
				$pub50 = false;
				if(sizeof($numposts)>=1)
				{
					$pub50 = true;
				}
			// 50 puntos
				$points50 = false;
				if(($user_profile->points)>=50)
				{
					$points50 = true;
				}
			// 200 puntos
				$points200 = false;
				if(($user_profile->points)>=200)
				{
					$points200 = true;
				}
			// 500 puntos 
				$points500 = false;
				if(($user_profile->points)>=500)
				{
					$points500 = true;
				}
			// 1000 puntos
				$points1000 = false;
				if(($user_profile->points)>=1000)
				{
					$points1000 = true;
				}
			// Cambiar foto por primera vez
                $difPic = false;
                if($user->avatar)
                {
                	$difPic = true;
                }
			// calificar 1 publicacion
                $rate = false;
                if($rate)
                {
                	$rate = true;
                	return 0;
                }


			return View::make('user.show', ['user' => $user, 'userProfile' => $user_profile, 'posts' => $posts]);
		}else{
			return View::make('error')->with('tab','error');
		}
	}

	public function changeImage()
    {

        if (Input::hasFile('photo')) {
            $photo = Input::file('photo');
            
            Auth::user()->avatar = Auth::user()->id . "." . $photo->getClientOriginalExtension();

            Auth::user()->save();

            $path = "uploads/" . Auth::user()->id;

            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $path .= "/avatar";

            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $photo->move($path, Auth::user()->avatar);

            Flash::success('Imagen cambiada correctamente');

        } else {
            Flash::error('La imagen es obligatoria');
        }

        return Redirect::back();
    }

    
	


}