@extends('layout')
@section('content')
	{{ Form::open(array('url' => '/simpanPinjam/'.$id,'class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('E-mail') }}
		{{ Form::text('email',null,['class'=>'ui input', 'placeholder'=>'E-mail']) }}
	</div>
	<div class="field">
	{{ Form::label('Nomor Handphone') }}
		{{ Form::text('handphone',null,['class'=>'ui input', 'placeholder'=>'Nomor Handphone']) }}
	</div>
	<div class="field">
	{{ Form::label('Tanggal Peminjaman') }}
		{{ Form::text('tanggal',null,['class'=>'ui input', 'placeholder'=>'Tanggal Peminjaman']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Mulai') }}
		{{ Form::text('jam_mulai',null,['class'=>'ui input', 'placeholder'=>'Jam Mulai']) }}
	</div>
	<div class="field">
	{{ Form::label('Jam Selesai') }}
		{{ Form::text('jam_selesai',null,['class'=>'ui input', 'placeholder'=>'Jam Selesai']) }}
	</div>
	<div class="field">
	{{ Form::label('Nama Barang') }}
		{{ Form::text('fasilitas',null,['class'=>'ui input', 'placeholder'=>'Nama Barang']) }}
	</div>
	<div class="field">
	{{ Form::label('Jumlah Peserta') }}
		{{ Form::text('peserta',null,['class'=>'ui input', 'placeholder'=>'Jumlah Peserta']) }}
	</div>
	<div class="field">
	{{ Form::label('Keperluan') }}
		{{ Form::textarea('keperluan',null,['class'=>'ui input', 'placeholder'=>'Keperluan']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
	
	@if($errors->has())
		<div class="ui error message">
			<i class="close icon"></i>
			  <div class="header">
			    Maaf, sepertinya di masukan anda terdapat kesalahan
			  </div>
			<ul class="list">
			    @foreach($errors->all() as $message)
			    <li>{{ $message }}</li>
			    @endforeach
			</ul>
		</div>
		@endif
@stop