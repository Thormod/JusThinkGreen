@extends('base')

@section('content')
		@include('layouts.menu')
		<div id="wrap">
			<div id="main-nav" class="">
				<div class="container">
					<div class="nav-header">
							<a class="btn btn-blog outline-white" href="#">Inicio</a>
							<a class="menu-link nav-icon" href="#"><span class="glyphicon glyphicon-th" style="margin-left: 20px;"></span></a>
							@if(!Auth::check())
							<a class="btn btn-blog outline-white pull-right" href="{{  URL::to('login_index') }}" >Login</a>
							@else
							<a class="btn btn-blog outline-white pull-right" href="{{  URL::to('logout') }}" >Logout</a>
							@endif
						</div>
				</div>
			</div>
					
			<section id="hero" class="light-typo">
				<div id="cover-image" class="image-bg animated fadeIn"></div>
				<div class="container welcome-content">
					<div class="middle-text">
						<img src="assets/img/logo3.png">
						@if(!Auth::check())
						<h2><b>Bienvenidos</b> a la primera red social ambiental</h2>
						@else
						<h2><b>Bienvenid@,</b> {{Auth::user()->username}}</h2>
						@endif
						<a class="btn smooth-scroll" href="#start">Ver más</a>
					</div>
				</div>
			</section>
				<section id="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><a href="{{URL::to('/')}}">Inicio</a></li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<div id="start" class="container content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<article class="clearfix">
							<div class="post-date">
								May 26, 2014 | <a href="">Melissa Sing </a> <span><a href="">11 Comments</a></span>
							</div>		
							<h2><a href="post-typography.html">We don't have a brig</a></h2>
							<p>Use this resource to highlight the points of interest of your products. Just a click to open a brief description of each point, allowing your user to get a deep and fast understanding of your product features. <a class="" href="post-typography.html">Read more</a>
							</p>
						</article>
						<article class="clearfix">
							<div class="post-date">
								May 26, 2014 | <a href="">Melissa Sing </a> <span><a href="">42 Comments</a></span>
							</div>		
							<h2><a href="post-image.html">Every other day it's food, food, food.</a></h2>
							<p>I suppose I could part with 'one' and still be feared… I don't 'need' to drink. I can quit anytime I want! Oh, I think we should just stay friends. Noooooo! Five hours? Aw, man! Couldn't you just get me the death penalty? <a class="" href="post-image.html">Read more</a>
							</p>
						</article>
						<article class="clearfix">
							<div class="post-date">
								May 12, 2014 | <a href="">Melissa Sing </a> <span><a href="">2 Comments</a></span>
							</div>		
							<h2><a href="post-audio.html">Ah, now the ball's in Farnsworth's court!</a></h2>
							<p>Bender, hurry! This fuel's expensive! Also, we're dying! Fry, we have a crate to deliver. In your time, yes, but nowadays shut up! Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their stemcells. This is the worst part. The calm before the battle. <a class="" href="post-audio.html">Read more</a>
							</p>
						</article>
						<article class="clearfix last">
							<div class="post-date">
								May 10, 2014 | <a href="">Melissa Sing </a> <span><a href="">23 Comments</a></span>
							</div>		
							<h2><a href="post-video.html">But I've never been to the moon!</a></h2>
							<p>But I've never been to the moon! I found what I need. And it's not friends, it's things. Can I use the gun? Incidentally, you have a dime up your nose. One hundred dollars. <a class="" href="post-video.html">Read more</a>
							</p>
						</article>

						

						<div class="paging clearfix">
							<a class="btn pull-left" href="#"><i class="icon-arrow-left2 left"></i><span>Viejas</span><span class="hidden-xs"> Publicaciones</span></a>
							<a class="btn pull-right" href="#"><span>Nuevas </span><span class="hidden-xs"> Publicaciones</span><i class="icon-arrow-right2 right"></i></a>
						</div>

					</div>	
				</div><!-- end row -->
			</div>
				


				@include('footer')
		</div>		

		
	
	</body>
</html>


@stop