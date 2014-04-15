@extends('layout')
@section('content')
<article id="slider">
	
	<!-- Slider Setup -->
	<input checked type="radio" name="slider" id="slide1"/>
	<input type="radio" name="slider" id="slide2" />
	<input type="radio" name="slider" id="slide3" />
	<input type="radio" name="slider" id="slide4" />
	<input type="radio" name="slider" id="slide5" />	

	<!-- The Slider -->
	<div id="slides">		
		<div id="overflow">			
			<div class="inner">				
				<article>
					<img src="http://www.phlume.com/chad/testtest/1.jpg" />
				</article>					
				<article>
                    <img src="http://www.phlume.com/chad/testtest/2.jpg" />
				</article>					
				<article>
					<img src="http://www.phlume.com/chad/testtest/3.jpg" />
				</article>
				<article>
                	<img src="http://www.phlume.com/chad/testtest/4.jpg" />
				</article>
			</div> <!-- .inner -->
		</div> <!-- #overflow -->
	</div> <!-- #slides -->
	<!-- Controls and Active Slide Display -->

	<div id="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
	</div> <!-- #controls -->
	
	<div id="active">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
	</div> <!-- #active -->
</article>	
@stop