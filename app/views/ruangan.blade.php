@extends('layout')
@section('content')

<!-- filter starts here -->
		<div id="filter">
			<div class="ui form segment">
				<p>Filter By</p>
				<input type="date" name="bday">
				<form>
					<select name="filter">
						<option value="lantai">Lantai</option>
						<option value="kapasitas">Kapasitas</option>
					</select>
					</br>
					{{ Form::submit('filter',['class'=>'ui blue submit button']) }}
				</form>
			</div>
		</div>
		
		@if($ruangan->isEmpty())
		<p>tidak ada ruangan pada database</p>
		@else
		<!-- table starts here -->
		<table class="ui sortable table segment">
			<thead>
		    	<tr>
			    	<th>Nama Ruangan</th>
			    	<th>Lantai</th>
			    	<th>Kapasitas</th>
				    <th>Status</th>
				    <th>Pinjam</th>
				    <th>Lihat Deskripsi Ruangan</th>

		  		</tr>
			</thead>
		  	<tbody>
				@foreach($ruangan as $r)
					<tr>
						<td>{{$r->nomor_ruangan}}</td>
						<td>{{$r->lantai}}</td>
						<td>{{$r->kapasitas}}</td>
						<td>Palsu</td>
						<td>
							<div class="circular ui icon button">
								<a href="{{action('RuanganManager@pinjam',$r->id)}}">
									<i class="ok circle icon"></i>
								</a>
							</div>
						</td>
						<td>
							<div class="circular ui icon button">
								<a href="{{action('RuanganManager@show',2)}}" class="">
								<i class="ok circle icon"></i></a>
							</div>
						</td>
					</tr>
			    @endforeach
		  	</tbody>
		</table>
		@endif
@stop