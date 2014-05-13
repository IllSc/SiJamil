@extends('layout')
@section('content')

<div id="table">
	<table class="ui table segment">
		<thead>
	    	<tr>
		    	<th>Name</th>
		    	<th>Lantai</th>
		    	<th>Kapasitas</th>	    
			    <th>Fasilitas</th>
	  		</tr>
		</thead>
	  	<tbody>
			
		    <tr>
		      	<td>{{$ruangan->nomor_ruangan}}</td>
	  			<td>{{$ruangan->lantai}}</td>
	  			<td>{{$ruangan->kapasitas}}</td> 
	  			<!-- <td></td> -->
	  			<td>{{$ruangan->fasilitas}}</td>
		    </tr>
		    
	  	</tbody>
	</table>
</div>

@stop