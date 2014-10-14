<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	public static $rules = array(
        'username' => array('required', 'email', 'unique:users'),
        'email' => array('required', 'email', 'unique:users'),
        'password' => array('required', 'min:4', 'confirmed'),
        'password_confirmation' => array('required'),
    );
    protected $hidden = array('password', 'remember_token');

	
	public function posts() {
        return $this->hasMany('Post');
    }

}
