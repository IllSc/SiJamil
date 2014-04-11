<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $hidden = array('password');
	public $table = 'users';

	public function forms()
	{
		return $this->hasMany('Form','id_peminjam');
	}

	public function penyetuju(){
		return $this->belongsToMany('Form','id_form');
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}