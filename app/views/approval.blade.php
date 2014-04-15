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
						
						<td>{{$f->status}}</td>
				    </tr>
				@endforeach
			  	</tbody>
			</table>
	</div>

@stop