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
		$user = User::find($post->user_id);
		if($post){
			return View::make('post.show', ['post'=>$post, 'user'=>$user]);
		}else{
			return "Publicacion no existe";
		}
	}

	public function create()
	{
		if(Auth::check())
		{
			return View::make('post.create')->with('tab','publicar');
		}else{
			return View::make('error')->with('tab','error');
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
		$post->description = Input::get('description');
		$post->content_text = Input::get('content_text');
		$post->user_id = Auth::user()->id;
		$post->point = 0;
		$post->status = 1;
		$post->save();

		return Redirect::to('/');
	}

	public function search()
	{
		return View::Make('post.search');
	}
}