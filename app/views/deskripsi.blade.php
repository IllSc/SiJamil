@extends('layout')
@section('content')
<!-- table starts here -->
<div id="table">
	<table class="ui table segment">
		<thead>
	    	<tr>
		    	<th>Name</th>
		    	<th>Lantai</th>
		    	<th>Kapasitas</th>
			    <th>Status</th>
			    <th>Fasilitas</th>
	  		</tr>
		</thead>
	  	<tbody>
	  	@foreach ($ruangan as $ruang)
	  		<tr>
	  			<td>{{$ruang->nomor_ruangan}}</td>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  		</tr>
	  	@endforeach
		    <!-- <tr>
		      	<td>John</td>
		      	<td>Approved</td>
		      	<td>None</td>
		      	<td>None</td>
		      	<td>None</td>
		    </tr>
		    <tr>
		      	<td>John</td>
		      	<td>Approved</td>
		      	<td>None</td>
		      	<td>None</td>
		      	<td>None</td>
		    </tr>
		    <tr>
		      	<td>John</td>
		      	<td>Approved</td>
		      	<td>None</td>
		      	<td>None</td>
		    </tr> -->
	  	</tbody>
	</table>
</div>

@stop