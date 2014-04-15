@extends('layout')
@section('content')
	<div id="table">
			<table class="ui table segment">
				<thead>
			    	<tr>
				    	<th>Ruangan</th>
				    	<th>Lantai</th>
				    	<th>Kapasitas</th>
					    <th>Status</th>
					    <th>Jam Mulai</th>
						<th>Jam Selesai</th>
						<th>Keperluan</th>
					    <th>Approve</th>
					    <th>Tolak</th>

			  		</tr>
				</thead>
			  	<tbody>
			  		@foreach ($forms as $form)
			  			<tr>
			  				<td>{{$form->ruangan->nomor_ruangan}}</td>
			  				<td>{{$form->ruangan->lantai}}</td>
			  				<td>{{$form->ruangan->kapasitas}}</td>
			  				<td>{{"Menunggu Persetujuan ".$form->status}}</td>
			  				<td>{{$form->jam_peminjaman}}</td>
							<td>{{$form->jam_selesai}}</td>
							<td>{{$form->keperluan}}</td>
			  				<td><div class="circular ui icon button">
									<a href="{{action('PenyetujuManager@toMahalum',$form->id)}}">
										<i class="ok circle icon"></i>
									</a>
								</div></td>
							<td><div class="circular ui icon button">
									<a href="{{action('PenyetujuManager@tolak',$form->id)}}">
										<i class="ok circle icon"></i>
									</a>
								</div></td>
			  			</tr>
			  		@endforeach
				    <!-- <tr>
				      <td>2303</td>
				      <td>3</td>
				      <td>3000</td>
				      <td>buat main dota</td>
				      <td>24/3/2014 15.00-16.00</td>
				      <td><input type="radio" name="agree1" value="ok"><br></td>
				      <td><input type="radio" name="agree1" value="no"><br></td>
				    </tr>
				    <tr>
				      <td>2402</td>
				      <td>4</td>
				      <td>1200</td>
				      <td>buat nonton free to play featuring dendi</td>
				      <td>25/3/2014 15.00-16.00</td>
				      <td><input type="radio" name="agree2" value="ok"><br></td>
				      <td><input type="radio" name="agree2" value="no"><br></td>
				    </tr>
				    <tr>
				      <td>2602</td>
				      <td>6</td>
				      <td>50</td>
				      <td>final TI 5</td>
				      <td>26/3/2014 15.00-16.00</td>
				      <td><input type="radio" name="agree3" value="ok"><br></td>
				      <td><input type="radio" name="agree3" value="no"><br></td>
				    </tr> -->
			  	</tbody>
			</table>
	</div>
@stop

