<?php

class RuanganManager extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ruangan = Ruangan::find($id);
		//$ruangan->title =  'Deskripsi ruangan '.$ruangan->nomor_ruangan;
		return View::make('deskripsi',compact('ruangan'));
	}

	public function pinjam($id)
	{
		return View::make('form',array('title'=> 'Form','id'=>$id));
	}
	
	public function ruanganHome(){
		$ruangan = Ruangan::all();
		return View::make('ruangan', compact('ruangan'));
	}

	public function simpanPinjaman($idRuangan){
		$input = Input::all();
		
		$form = New Isian;
		$form->email = $input['email'];
		$form->nomor_telepon = $input['handphone'];
		$form->tanggal = $input['tanggal'];
		//$form->tanggal_selesai = $input['tgl_selesai'];
		$form->jam_peminjaman = $input['jam_mulai'];
		$form->jam_selesai = $input['jam_selesai'];
		$form->id_ruangan = $idRuangan;
		$user = Auth::user();
		
		$form->user()->associate($user);

		$form->status = 'Humas';
		$form->fasilitas = $input['fasilitas'];
		$form->jumlah_peserta = $input['peserta'];
		$form->keperluan = $input['keperluan'];
		$form->save();
		
		return Redirect::action('RuanganManager@ruanganHome');
	}
	
	public function filterTanggal($tanggal)
	{
		$ruangan = Ruangan::all();
		$form_filter = Isian::where('tanggal','=',$tanggal)->get();
		$ruangan_filter = $form_filter->ruangan()->get();
		$result = $ruangan->diff($ruangan_filter);
		return View::make('ruangan', compact('result'));
	}

	public function lihatForm(){
		
		$user = Auth::user();
		//array form yang berisi semua form yang bersesuaian dengan user yang sedang aktif sekarang
		$forms = $user->forms;
		
		return View::make('approval', compact('forms'));
	}

}