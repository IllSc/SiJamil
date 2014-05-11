@extends('layout')
@section('content')
	{{ Form::open(array('url' => '/simpanPinjam/'.$id,'class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('E-mail') }}
		{{ Form::text('email',null,['class'=>'ui input', 'placeholder'=>'gunakan email UI (cth: chanek@ui.ac.id)','pattern'=>'^\D{0,15}\@ui.ac.id$','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Nomor Handphone') }}
		{{ Form::text('handphone',null,['class'=>'ui input', 'placeholder'=>'Nomor Handphone (cth: 089612345678)','pattern'=>'[0-9][0-9]*','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Tanggal Peminjaman') }}
		{{ Form::text('tanggal',null,['class'=>'ui input', 'placeholder'=>'Tanggal Peminjaman (cth:12-2-2009)','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Mulai') }}
		{{ Form::text('jam_mulai',null,['class'=>'ui input', 'placeholder'=>'Jam Mulai (cth: 14:30)','pattern'=>'[0-9]*:[0-9]*','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Selesai') }}
		{{ Form::text('jam_selesai',null,['class'=>'ui input', 'placeholder'=>'Jam Selesai (cth: 14:30)','pattern'=>'[0-9]*:[0-9]*','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Nama Barang') }}
		{{ Form::text('fasilitas',null,['class'=>'ui input', 'placeholder'=>'Nama Barang','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Jumlah Peserta') }}
		{{ Form::text('peserta',null,['class'=>'ui input', 'placeholder'=>'Jumlah Peserta','pattern'=>'[0-9]+{2}','required' => 'required']) }}
	</div>
	<div class="field">
	{{ Form::label('Keperluan') }}
		{{ Form::textarea('keperluan',null,['class'=>'ui input', 'placeholder'=>'Keperluan','required' => 'required']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
@stop