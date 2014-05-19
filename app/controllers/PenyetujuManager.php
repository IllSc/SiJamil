<?php

class PenyetujuManager extends \BaseController {

	public function humas()
	{
		$forms = Isian::where('status','=','Humas')->get();
		
		return View::make('humas',compact('forms'),array('title' => 'Home'));
	}

	public function mahalum()
	{
		$forms = Isian::where('status','=','Mahalum')->get();

		return View::make('mahalum',compact('forms'),array('title' => 'Home'));
	}

	public function perlengkapan()
	{
		$forms = Isian::where('status','=','Perlengkapan')->get();

		return View::make('perlengkapan',compact('forms'),array('title' => 'Home'));
	}

	public function history()
	{
		$forms = Isian::where('id','>','0')->get();

		return View::make('history',compact('forms'),array('title' => 'History'));
	}

	public function keteranganPenolakan($id)
	{
		return View::make('tolak',array('title'=> 'Keterangan Penolakan','id'=>$id));
	}
	
	public function keteranganPenerimaanHumas($id){
		return View::make('terimaHumas',array('title'=> 'Keterangan Penerimaan','id'=>$id));
	}
	
	public function keteranganPenerimaanMahalum($id){
		return View::make('terimaMahalum',array('title'=> 'Keterangan Penerimaan','id'=>$id));
	}
	
	public function keteranganPenerimaanPerlengkapan($id){
		return View::make('terimaPerlengkapan',array('title'=> 'Keterangan Penerimaan','id'=>$id));
	}
	
	public function tolak($id){
		$input = Input::all();
		$peran = Auth::user()->role;
		$form = Isian::find($id);
		$form->status = "Tolak";
		$form->ket_tolak = $input['keterangan'];
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
		$input = Input::all();
		$form = Isian::find($id);
		$form->status = "Mahalum";
		$form->ket_humas = $input['keterangan'];
		$form->save();
		return Redirect::action('PenyetujuManager@humas');
	}
	public function toPerlengkapan($id)
	{
		$input = Input::all();
		$form = Isian::find($id);
		$form->status = "Perlengkapan";
		$form->ket_mahalum = $input['keterangan'];
		$form->save();
		return Redirect::action('PenyetujuManager@mahalum');
	}
	public function setujui($id)
	{
		$input = Input::all();
		$form = Isian::find($id);
		$form->status = "Diterima";
		$form->ket_perlengkapan = $input['keterangan'];
		

		define('BUDGETS_DIR', public_path('uploads/budgets')); // I define this in a constants.php file
		if (!is_dir(BUDGETS_DIR))
		{
		    mkdir(BUDGETS_DIR, 0755, true);
		}

		$html = '<html><head><title>Surat Meminjam</title>'.
    			"<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>".
    			"</head><body><h2 style=\"font-family: 'Open Sans', sans-serif;\">".
    			'Surat Pinjaman</h2><hr><table border="0"><tr><td>Nama:</td>'.
    			'<td>'.$form->email.'</td>'.
    			'</tr><tr><td>Ruangan:</td>'.
    			'<td>'.'2301'.'</td>'.
    			'</tr><tr><td>Mulai:</td>'.
    			'<td>'.$form->jam_peminjaman.'</td>'.
    			'</tr><tr><td>Selesai:</td>'.
    			'<td>'.$form->jam_selesai.'</td>'.
    			'</tr></table></body></html>';

		$outputName = str_random(10); // str_random is a [Laravel helper](http://laravel.com/docs/helpers#strings)
		$pdfPath = BUDGETS_DIR.'/'.$outputName.'.pdf';
		$download = 'http://localhost/sijamil/public/uploads/budgets/'.$outputName.'.pdf';
		File::put($pdfPath, PDF::load($html, 'A4', 'portrait')->output());
		$form->Link = $download;
		$form->save();
		return Redirect::action('PenyetujuManager@perlengkapan');

	}



}