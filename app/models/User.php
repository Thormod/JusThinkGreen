<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	public static $rules = array(
        'username' => array('required','unique:users'),
        'email' => array('required', 'email', 'unique:users'),
        'password' => array('required', 'min:4', 'confirmed'),
        'password_confirmation' => array('required'),
        'avatar' => array('max:255'),
    );
    protected $hidden = array('password', 'remember_token');
    protected $fillable = array('username', 'password', 'email');

    public function posts(){
        return $this->hasMany('Post');
    }

    public function userProfile(){
        return $this->has('UserProfile');
    }

    public function avatar()
    {
        if ($this->avatar)
            return asset("uploads/{$this->id}/avatar/$this->avatar");
        else
            return asset("assets/images/just.png");
    }

}
