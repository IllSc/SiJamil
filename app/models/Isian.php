<?php

class Isian extends Eloquent {
	public $table = 'forms';

	public function user()
	{
		return $this->belongsTo('User','id_ruangan');
	}
	public function ruangan()
	{
		return $this->belongsTo('Ruangan','id_peminjam');
	}

	public function penyetuju(){
		return $this->belongsToMany('User','id_user');
	}

}