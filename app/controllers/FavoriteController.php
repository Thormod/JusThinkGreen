<?php

class FavoriteController extends BaseController{

	public function addFavorite($id)
	{
		if(Auth::check())
		{
			$favorite = new Favorite;
			$favorite->user_id = Auth::User()->id;
			$favorite->post_id = $id;
			$favorite->save();
		}else{
			return Redirect::to('login_index');
		}
	}

	public function removeFavorite()
	{/*
		if(Auth::check())
		{
			$favorite = Favorite::where(function($query){
						$query->where('user_id', '==', Auth::User()->id)
							  ->where('post_id', '==', $id);
			})->get();

			$favorite->delete();
		}else{
			return Redirect::to('login_index');
		}*/
	}

	public function showFavorites()
	{

		if(Auth::check())
		{	
			$favorites = Favorite::where('user_id', '==', Auth::User()->id)->get();
			$posts = array();
			$i = 0;
				foreach($favorites as $favorite) {
					$posts[i] = Post::where('post_id', '==', $favorite->post_id)->get();
					return Post::where('post_id', '==', $favorite->post_id)->get();
				}
			return View::Make('favorites', ['posts'=>$posts]);

		}else{
			return Redirect::to('login_index');
		}
	}
}