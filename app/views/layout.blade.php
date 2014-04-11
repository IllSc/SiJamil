<html>
	<head>
		{{HTML::style('css/semantic.min.css');}}
		{{HTML::style('css/sijamil.css');}}
		{{HTML::style('slider/jquery.bxslider.css');}}
		{{HTML::script('js/semantic.min.js');}}
		{{HTML::script('jquery/semantic.min.js');}}
		{{HTML::script('slider/jquery.bxslider.min.js');}}
		<title>{{ isset($title) ? $title : 'Sesuatu'}}</title>
		<!-- <link rel="stylesheet" type="text/css" class="ui" href="css/semantic.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" class="ui" href="css/sijamil.css"> -->
		
		<!-- bxSlider Javascript file -->
		
		<!-- bxSlider CSS file -->
		<!-- <link href="slider/jquery.bxslider.css" rel="stylesheet" /> -->
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