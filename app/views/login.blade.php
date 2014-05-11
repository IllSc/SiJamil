<html>
	<head>
	{{HTML::style('css/semantic.min.css');}}
	{{HTML::style('css/sijamil.css');}}
	{{HTML::script('js/semantic.min.js');}}
	{{HTML::script('js/jquery-1.11.0.min.js');}}
	{{HTML::script('js/sijamil.js');}}
	<title>{{ isset($title) ? $title : 'Sesuatu'}}</title>
	</head>	
<body>
	 <div id="posisi">
		<div class="ui blue message">
			<div class="header center">
		    	Selamat datang di Sijamil
		  	</div>
		</div>
		{{ Form::open(array('url' => 'login','class'=>'ui form segment')) }}
		<div class="field">
			{{ Form::label('Username') }}
			<div class="ui left labeled icon input">
				{{ Form::text('username',null,['class'=>'ui input', 'placeholder'=>'Username']) }}
			    <i class="user icon"></i>
			    <div class="ui corner label">
			    	<i class="icon asterisk"></i>
			    </div>
			</div>
		</div>
		<div class="field">
			{{ Form::label('Password') }}
			<div class="ui left labeled icon input">
				{{ Form::password('password',null,['class'=>'ui input']) }}
				<i class="lock icon"></i>
	      		<div class="ui corner label">
	        		<i class="icon asterisk"></i>
	      		</div>
	      	</div>
		</div>
		{{ Form::submit('Submit',['class'=>'ui blue submit button submit-button', 'onclick'=>'myFunction()']) }}
		{{ Form::close() }}
		@if($errors->has())
		<div class="ui error message">
			<i class="close icon"></i>
			  <div class="header">
			    Maaf, sepertinya di masukan anda terdapat kesalahan
			  </div>
			<ul class="list">
			    @foreach($errors->all() as $message)
			    <li>{{ $message }}</li>
			    @endforeach
			</ul>
		</div>
		@endif
	</div>
</body>

</html>