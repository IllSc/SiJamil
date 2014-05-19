@extends('layout')
@section('content')
	<div id="table">
			<table class="ui sortable table segment">
				<thead>
			    	<tr>
				    	<th>Ruangan</th>
				    	<th>Status</th>
						<th>Keterangan</th>
						<th>Surat Peminjaman</th>
						<th>Hapus</th>
				    </tr>
				</thead>
			  	<tbody>
				@foreach($forms as $f)
					@if($f->visible_by_civitas == "yes")
				    <tr>
				      	<td>{{$f->ruangan->nomor_ruangan}}</td>
						@if($f->status == "Tolak")
						<td>{{"Ditolak"}}</td>
						@elseif($f->status != "Diterima")
						<td>{{"Menunggu Persetujuan ".$f->status}}</td>
						@else
						<td>{{$f->status}}</td>
						@endif
						<td>{{"Keterangan Mahalum : ".$f->ket_mahalum ." Keterangan Perlengkapan : ".$f->ket_perlengkapan ." Keterangan Humas : ".$f->ket_humas ." Keterangan Penolakan : ".$f->ket_tolak}}</td>
						<td>
							<div class="circular ui icon button">
								<a href="{{$f->Link}}">
									<i class="ok circle icon"></i>
								</a>
							</div>
						</td>
						<td>
							<div class="circular ui icon button">
								<a href="{{action('RuanganManager@hapusForm',$f->id)}}">
									<i class="ok circle icon"></i>
								</a>
							</div>
						</td>
				    </tr>
					@endif
				@endforeach
			  	</tbody>
			</table>
	</div>
@stop