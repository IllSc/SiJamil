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
									<a href="{{action('PenyetujuManager@toPerlengkapan',$form->id)}}">
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
	<!--test-->
	<div class="ui small modal">
			<i class="close icon"></i>
		  	<div class="header"><i class="empty calendar icon"></i>Tambah Agenda</div>

		  	<div class="content">
		    	<div class="ui form">
					<div class="field">
				    	<label>Nama</label>
				    	<input type="text" id="namaAgenda"></input>
				  	</div>
				  	
				  	<div class="ui five fields">
				  		<div class="field">
				  			<label>Hari</label>
		    				<div class="ui selection dropdown">
		  						<span class="text" id ="pilihhari">Senin</span>
							    <i class="dropdown icon"></i>
							    <div class="menu">
							      <span class="item active" data-text="Senin">Senin</span>
							      <span class="item" data-text="Selasa">Selasa</span>
							      <span class="item" data-text="Rabu">Rabu</span>
							      <span class="item" data-text="Kamis">Kamis</span>
							      <span class="item" data-text="Jumat">Jumat</span>
							      <span class="item" data-text="Sabtu">Sabtu</span>
							      <span class="item" data-text="Minggu">Minggu</span>
							    </div>
							</div>
				  		</div>
				  		<div class="field">
				  			<label>Jam mulai</label>
		    				<input id="timefrom" placeholder="Jam mulai" type="text">
				  		</div>
				  		<div class="field">
				  			<label>Jam selesai</label>
		    				<input id="timeto" placeholder="Jam selesai" type="text">
				  		</div>
				  	</div>
				</div>
		  	</div>

		  	<div class="actions">

		    <div class="ui black button">Batal</div>
		    <div class="ui positive right labeled icon button">Tambah<i class="checkmark icon"></i></div>
		  </div>
		</div>
		<script type="text/javascript">
		$('.ui.dropdown').dropdown();
		
		$('.ui.dropdown.prodi').dropdown({
			onChange: function (val) {
				if(val == "Sistem Informasi") {
					window.location.href="../si";
				}else{
					window.location.href="../ilkom";
				}
				
    		}
		});
		
		$('.ui.small.modal')
  			.modal('attach events', '.add', 'show')
		;
		$('#timefrom').pickatime({
			interval: 10,
			format: 'HH:i',
			min: [8,0],
			max: [22,0],
			disable: [
				[12,0],
				[16,30]
			]
		});
		$('#timeto').pickatime({
			interval: 10,
			format: 'HH:i',
			min: [8,10],
			max: [0,0]
		});
		</script>
@stop

