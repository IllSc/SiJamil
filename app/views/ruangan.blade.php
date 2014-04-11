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
				</form>
			</div>
		</div>

		<!-- table starts here -->
		<div id="table">
			<table class="ui table segment">
				<thead>
			    	<tr>
				    	<th>Name</th>
				    	<th>Lantai</th>
				    	<th>Kapasitas</th>
					    <th>Status</th>
					    <th>Pinjam</th>
					    <th>Lihat Deskripsi Ruangan</th>

			  		</tr>
				</thead>
			  	<tbody>
				    <tr>
				    	<td>John</td>
				    	<td>Approved</td>
				    	<td>None</td>
				    	<td>Bisa</td>
				    	<td>
					      	<div class="circular ui icon button">
	  							<a href="{{action('RuanganManager@pinjam',2)}}">
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
				    <tr>
				    	<td>John</td>
				    	<td>Approved</td>
				    	<td>None</td>
				    	<td>None</td>
				    	<td>
					      	<div class="circular ui icon button">
	  							<a href="form.html">
	  								<i class="ok circle icon"></i>
	  							</a>
	  						</div>
  						</td>
  						<td>
					      	<div class="circular ui icon button">
	  							<i class="ok circle icon"></i>
	  						</div>
  						</td>
				    </tr>
				    <tr>
				    	<td>John</td>
				    	<td>Approved</td>
				    	<td>None</td>
				    	<td>None</td>
				    	<td>
					      	<div class="circular ui icon button">
	  							<a href="form.html">
	  								<i class="ok circle icon"></i>
	  							</a>
	  						</div>
  						</td>
  						<td>
					      	<div class="circular ui icon button">
	  							<i class="ok circle icon"></i>
	  						</div>
  						</td>
				    </tr>
			  	</tbody>
			</table>
		</div>

@stop