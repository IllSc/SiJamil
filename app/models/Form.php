<?php

class Form extends Eloquent {
	public $table = 'forms';

	public function user()
	{
		return $this->belongsTo('User');
	}
	public function ruangan()
	{
		return $this->belongsTo('Ruangan');
	}

	public function penyetuju(){
		return $this->belongsToMany('User','id_user');
	}

}