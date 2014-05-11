@extends('layout')
@section('content')
	{{ Form::open(array('url' => '/toPerlengkapan/'.$id,'class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('keterangan') }}
		{{ Form::text('keterangan',null,['class'=>'ui input', 'placeholder'=>'Keterangan']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
@stop