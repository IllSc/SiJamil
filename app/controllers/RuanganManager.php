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
	
	public function ruanganHome(){
		$ruangan = Ruangan::all();
		return View::make('ruangan', compact('ruangan'));
	}

	public function simpanPinjaman($idRuangan){
		$input = Input::all();
		
		$form = New Form;
		$form->email = $input['email'];
		$form->nomor_telepon = $input['handphone'];
		$form->tanggal_mulai = $input['tgl_mulai'];
		$form->tanggal_selesai = $input['tgl_selesai'];
		$form->jam_mulai = $input['jam_mulai'];
		$form->jam_selesai = $input['jam_selesai'];
		$form->id_ruangan = $idRuangan;
		$form->id = 1;
		$form->id_peminjam = 1;
		$form->status = 'palsu';
		$form->fasilitas = $input['fasilitas'];
		$form->jumlah_peserta = $input['peserta'];
		$form->keperluan = $input['keperluan'];
		$form->save();
		
		return Redirect::action('RuanganManager@ruanganHome');
	}
}