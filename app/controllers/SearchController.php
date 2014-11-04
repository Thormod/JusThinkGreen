<?php

class SearchController extends BaseController {

	public function searchAll()
	{
		$criteria=Input::get('criteria');
		
		$users=array();

		$posts=Post::where(function ($query) use($criteria) {
		    $query->where('post.status', '=', 1);
	    	$query->whereNested(function($query) use($criteria)
			{
	    		$query->where('post.title', 'like','%'.$criteria.'%');
	    		$query->orWhere('post.content_text', 'like','%'.$criteria.'%');
	    		$query->orWhere('post.description', 'like','%'.$criteria.'%');
	    	});
		})->select('post.*')->distinct()->paginate(3); 

		return View::make('search.results', array('tab' => 'results', 'users' => $users, 'posts' => $posts));
	}
}