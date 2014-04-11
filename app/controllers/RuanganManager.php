<?php

class RuanganManager extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		return "Jalan Gan!";
	}
	public function pinjam($id)
	{
		return View::make('form',array('title'=> 'Form','id'=>$id));
	}
	

	

}