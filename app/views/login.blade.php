<html>
	<head>
	{{HTML::style('css/semantic.min.css');}}
	{{HTML::style('css/sijamil.css');}}
	{{HTML::style('slider/jquery.bxslider.css');}}
	{{HTML::script('js/semantic.min.js');}}
<!--		{{HTML::script('jquery/semantic.min.js');}} -->
	{{HTML::script('slider/jquery.bxslider.min.js');}}
	<title>{{ isset($title) ? $title : 'Sesuatu'}}</title>
	<!-- <link rel="stylesheet" type="text/css" class="ui" href="css/semantic.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" class="ui" href="css/sijamil.css"> -->
	
	<!-- bxSlider Javascript file -->
	
	<!-- bxSlider CSS file -->
	<!-- <link href="slider/jquery.bxslider.css" rel="stylesheet" /> -->
	</head>

<body>
	{{ Form::open(array('url' => 'login','class'=>'ui form segment')) }}
	<div class="field">
	{{ Form::label('Username') }}
		{{ Form::text('username',null,['class'=>'ui input']) }}
	</div>
	<div class="field">
	{{ Form::label('Password') }}
		{{ Form::text('password',null,['class'=>'ui input']) }}
	</div>
	{{ Form::submit('Submit',['class'=>'ui blue submit button']) }}
	{{ Form::close() }}
</body>
</html>