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
					    <th>Waktu</th>
					    <th>Approve</th>
					    <th>Tolak</th>

			  		</tr>
				</thead>
			  	<tbody>
				    <tr>
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
				    </tr>
			  	</tbody>
			</table>
	</div>
@stop

