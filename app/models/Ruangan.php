<?php

class Ruangan extends Eloquent {
	public $table = 'ruangan';

	public function forms(){
		return $this->hasMany('Form','id_ruangan');
	}
}