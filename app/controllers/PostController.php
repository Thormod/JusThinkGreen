<?php

class PostController extends \BaseController {



	public function index()
	{

		$posts = Post::orderBy('point', 'desc')->get();

		return View::make('post.index', ['posts'=>$posts]);

	}

	public function show($id)
	{
		$post = Post::find($id);

		if($post){
			return View::make('post.show', ['post'=>$post]);
		}else{
			return "Publicacion no existe";
		}
	}

	public function create()
	{
		if(Auth::check())
		{
			return View::make('post.create');
		}else{
			return "Iniciar sesión para poder crear una publicacion";
		}
	}

	public function store()
	{
		$validation = Validator::make(Input::all(), Post::$rules);

		if($validation->fails())
		{
			return Redirect::Back()->withInput()->withErrors($validation->messages());
		}
		$post = new Post;
		$post->title = Input::get('title');
		$post->content_text = Input::get('content_text');
		$post->user_id = Auth::user()->id;
		$post->point = 0;
		$post->save();
		return Redirect::route('post.index');
	}

}