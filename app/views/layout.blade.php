<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		{{HTML::style('css/semantic.min.css');}}
		{{HTML::style('css/sijamil.css');}}
		{{HTML::script('js/semantic.min.js');}}
		{{HTML::script('js/jquery-1.11.0.min.js');}}
		{{HTML::script('js/jquery.tablesort.min.js');}}
		<title>{{ isset($title) ? $title : 'Sesuatu'}}</title>
	</head>
	<body>
		<!--header menunya-->
		<div id="header">
			<div class="ui pointing red inverted menu">
				<div class="container">
					<div class="logo">
						<div class="left menu">
							<div class="item">Sijamil</div>
						</div>
					</div>
					<div class="ui red inverted right menu">
						<a class="item {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home');}}">Home</a>
						<a class="item {{ Request::is('ruangan') ? 'active' : '' }}" href="{{ route('ruangan');}}">Ruangan</a>
						<a class="item {{ Request::is('approval') ? 'active' : ''}}" href="{{ route('approval');}}">Approval</a>
						<a class="item" href="{{ route('logout') }}">Logout</a>
					</div>
				</div>
			</div>
		</div>

		@yield('content')

		<!--foooter starts here -->
		<div id="footer">
			<div class="center segment">Copyright Sijamil 2014</div>
		</div>
	</body>
</html>