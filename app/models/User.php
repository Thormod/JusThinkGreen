<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	public static $rules = array(
        'first_name' => array('required'),
        'last_name' => array('required'),
        'username' => array('required', 'email', 'unique:users');
        'email' => array('required', 'email', 'unique:users'),
        'password' => array('required', 'min:4', 'confirmed'),
        'password_confirmation' => array('required'),
    );
    protected $hidden = array('password', 'remember_token');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	public function posts() {
        return $this->hasMany('Post');
    }

}
