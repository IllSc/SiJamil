@extends('layout')
@section('content')

<!-- filter starts here -->
		<div class="ui form segment">
			<input type="date" name="bday">
		</div>
		@foreach ($errors as $error)
			<?php print_r($error) ?>
		@endforeach

	{{$errors}}
		@foreach ($errors as $error)
			{{ $error}}
		@endforeach

		<?php echo $errors->first('email'); ?>
		@if($ruangan->isEmpty())
		<p>tidak ada ruangan pada database</p>
		@else
		<!-- table starts here -->
		<div id="table">
			<table class="ui sortable table segment">
				<thead>
			    	<tr>
				    	<th>Nama Ruangan</th>
				    	<th>Lantai</th>
				    	<th>Kapasitas</th>
					    <!--<th>Status</th>-->
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
							<!--<td>Palsu</td>-->
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
@stop