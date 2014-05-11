@extends('layout')
@section('content')
	<div id="table">
			<table class="ui sortable table segment">
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
									<a href="{{action('PenyetujuManager@keteranganPenerimaanHumas',$form->id)}}">
										<i class="ok circle icon"></i>
									</a>
								</div></td>
							<td><div class="circular ui icon button">
									<a href="{{action('PenyetujuManager@keteranganPenolakan',$form->id)}}">
										<i class="ok circle icon"></i>
									</a>
								</div></td>
			  			</tr>
			  		@endforeach
			  	</tbody>
			</table>
	</div>
@stop

