<?php

class User extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $table = 'users';

	public function forms()
	{
		return $this->hasMany('Form','id_peminjam');
	}

	public function penyetuju(){
		return $this->belongsToMany('Form','id_form');
	}

}