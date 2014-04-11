@extends('layout')
@section('content')
	{{ Form::open(array('url' => '','class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('Nomor Handphone') }}
		{{ Form::text('handphone',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Waktu Peminjaman') }}
		{{ Form::text('password',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Nama Ruang') }}
		{{ Form::text('password',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Nama Barang') }}
		{{ Form::text('password',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Jumlah Peserta') }}
		{{ Form::text('password',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Keperluan') }}
		{{ Form::textarea('password',null,['class'=>'ui input']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
@stop