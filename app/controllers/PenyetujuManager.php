<?php

class PenyetujuManager extends \BaseController {

	public function humas()
	{
		$forms = Isian::where('status','=','Humas')->get();
		
		return View::make('humas',compact('forms'));
	}

	public function mahalum()
	{
		$forms = Isian::where('status','=','Mahalum')->get();

		return View::make('mahalum',compact('forms'));
	}

	public function perlengkapan()
	{
		$forms = Isian::where('status','=','Perlengkapan')->get();

		return View::make('perlengkapan',compact('forms'));
	}

	public function tolak($id)
	{
		
		$peran = Auth::user()->role;
		$form = Isian::find($id);
		$form->status = "Tolak";
		$form->save();
		if($peran == "Humas"){
			return Redirect::action('PenyetujuManager@humas');
		} else if($peran == "Mahalum"){
			return Redirect::action('PenyetujuManager@mahalum');
		}
		else if($peran == "Perlengkapan"){
			return Redirect::action('PenyetujuManager@perlengkapan');
		}
		
	}
	public function toMahalum($id)
	{
		$form = Isian::find($id);
		$form->status = "Mahalum";
		$form->save();
		return Redirect::action('PenyetujuManager@humas');
	}
	public function toPerlengkapan($id)
	{
		$form = Isian::find($id);
		$form->status = "Perlengkapan";
		$form->save();
		return Redirect::action('PenyetujuManager@mahalum');
	}
	public function setujui($id)
	{
		$form = Isian::find($id);
		$form->status = "Diterima";
		$form->save();
		return Redirect::action('PenyetujuManager@perlengkapan');
	}



}