@extends('layout')
@section('content')
<div class="ui form segment">
			<div class="field">
				<label>Nomor Handphone</label>
				<div class="ui input">
					<input type="text" placeholder="Phone Number">
				</div>
			</div>
			<div class="field">
				<label>Waktu Peminjaman</label>
				<div class="ui input">
					<input type="text" placeholder="Hari/Tanggal/Bulan/Jam">
				</div>
			</div>
			<div class="field">
				<label>Nama Ruang</label>
				<div class="ui input">
					<input type="text" placeholder="Nama Ruangan">
				</div>
			</div>
			<div class="field">
				<label>Nama Barang</label>
				<div class="ui input">
					<input type="text" placeholder="Nama Barang">
				</div>
			</div>
			<div class="field">
				<label>Jumlah Peserta</label>
				<div class="ui input">
					<input type="text" placeholder="Jumlah Peserta">
				</div>
			</div>
			<div class="field">
				<label>Keperluan</label>
				<textarea placeholder="Keperluan"></textarea>
			</div>
			<div class="ui blue submit button">Login</div>
</div>
@stop