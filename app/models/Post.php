<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public static $rules = [
	'title' => 'required',
	'description' => 'required',
	'content_text' => 'required',
	];


	protected $table = 'post';


	public function image(){
        if ($this->image)
            return asset("uploads/{$this->user->id}/$this->image");
        else
            return asset("assets/images/just.png");
    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

}
