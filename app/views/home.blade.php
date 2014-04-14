@extends('layout')
@section('content')
	<div id="slider">
		<ul class="bxslider">
				<script>
					$(document).ready(function(){
						$('.bxslider').bxSlider({});
					});
				</script>
				<li><img class="ui large image" src="{{ URL::asset('images/test1.png') }}" alt=""></li>
				<li><img class="ui large image" src="{{ URL::asset('images/test2.png') }}" alt=""></li>
		</ul>
	</div>
	<div class="ui modal">
  		<i class="close icon"></i>
  		<div class="header">
    	Modal Title
 		</div>
 		<div class="content">
    		<div class="left">
      		Content can appear on left
    		</div>
    		<div class="right">
      		Content can appear on right
    		</div>
  		</div>
		<div class="actions">
			<div class="ui button">Cancel</div>
			<div class="ui button">OK</div>
		</div>
	</div>
	
@stop