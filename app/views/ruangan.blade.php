@extends('layout')
@section('content')
<div id="content">
	<!-- filter starts here -->
		@if($ruangan->isEmpty())
		<p>tidak ada ruangan pada database</p>
		@else
			@if($errors->has())
			<div class="ui success message">
				<i class="close icon"></i>
				  <div class="header">
				    Form berhasil disimpan
				  </div>
				  <p>Silahkan menunggu hingga proses approval selesai dilakukan. Untuk melihat proses approval dapat dilihat di halaman Approval</p>
			</div>
			@endif
		<!-- table starts here -->
		<div id="table">
			<table class="ui sortable table segment">
				<thead>
			    	<tr>
				    	<th>Nama Ruangan</th>
				    	<th>Lantai</th>
				    	<th>Kapasitas</th>
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
							<td>
								<div class="circular ui icon button">
									<a href="{{action('RuanganManager@pinjam',$r->id)}}">
										<i class="ok circle icon"></i>
									</a>
								</div>
							</td>
							<td>
								<div class="circular ui icon button">
									<a href="{{action('RuanganManager@show',$r->id)}}" class="">
									<i class="ok circle icon"></i></a>
								</div>
							</td>
						</tr>
				    @endforeach
			  	</tbody>
			</table>
		
		</div>
	@endif
</div>
@stop