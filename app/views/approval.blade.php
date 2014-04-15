@extends('layout')
@section('content')


	<div id="table">
			<table class="ui table segment">
				<thead>
			    	<tr>
				    	<th>Ruangan</th>
				    	<th>Status</th>
				    </tr>
				</thead>
			  	<tbody>
				@foreach($forms as $f)
				    <tr>
				      	<td>{{$f->ruangan->nomor_ruangan}}</td>
						@if($f->status != "Diterima")
						<td>{{"Menunggu Persetujuan ".$f->status}}</td>
						@else
						<td>{{$f->status}}</td>
						@endif
				    </tr>
				@endforeach
			  	</tbody>
			</table>
	</div>

@stop