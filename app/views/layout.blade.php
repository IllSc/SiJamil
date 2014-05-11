<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		{{HTML::style('css/semantic.min.css');}}
		{{HTML::style('css/sijamil.css');}}
		{{HTML::script('js/semantic.min.js');}}
		{{HTML::script('js/jquery-1.11.0.min.js');}}
		{{HTML::script('js/jquery.tablesort.min.js');}}
		<title>{{ isset($title) ? $title : 'Sesuatu'}}</title>
		<script type="text/javascript">
			$(function() {
				var table = $('<table></table>');
				table.append('<thead><tr><th class="number">Number</th></tr></thead>');
				var tbody = $('<tbody></tbody>');
				for(var i = 0; i<100; i++) {
					tbody.append('<tr><td>' + Math.floor(Math.random() * 100) + '</td></tr>');
				}
				table.append(tbody);
				$('.example.ex-2').append(table);

				$('table').tablesort().data('tablesort');

				$('thead th.number').data('sortBy', function(th, td, sorter) {
					return parseInt(td.text(), 10);
				});
			});
		</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div class="ui pointing teal inverted menu">
					<div class="left menu">
						<div class="item">Sijamil</div>							
					</div>
					<div class="right menu">
						<a class="item {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home');}}">Home</a>
						<a class="item {{ Request::is('ruangan') ? 'active' : '' }}" href="{{ route('ruangan');}}">Ruangan</a>
						<a class="item {{ Request::is('approval') ? 'active' : ''}}" href="{{ route('approval');}}">Approval</a>
						<a class="item" href="{{ route('logout') }}">Logout</a>
					</div>
				</div>
			</div>
			<div id="body">
				@yield('content')
			</div>
			<div id="clear"></div>
			<!--foooter starts here -->
			<div id="footer">
				<div class="center teal inverted">Copyright Sijamil 2014</div>
			</div>
		</div>
	</body>
</html>