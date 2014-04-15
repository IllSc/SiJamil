@extends('layout')
@section('content')
	{{ Form::open(array('url' => '/pinjam/{$id}','class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('Email') }}
		{{ Form::text('email',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Nomor Handphone') }}
		{{ Form::text('handphone',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Tanggal') }}
		{{ Form::text('tanggal',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Mulai') }}
		{{ Form::text('jam_mulai',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Selesai') }}
		{{ Form::text('jam_selesai',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Nama Barang') }}
		{{ Form::text('fasilitas',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Jumlah Peserta') }}
		{{ Form::text('peserta',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Keperluan') }}
		{{ Form::textarea('keperluan',null,['class'=>'ui input']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
@stop