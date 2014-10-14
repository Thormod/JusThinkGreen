@if(!Request::ajax())
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
         @section('title')
         JusThinkGreen
         @show
       </title>

	{{ HTML::style('assets/lib/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('assets/css/global.css') }}
	</head>
	<body>
	@include('header')

	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<img src="assets/img/logo3.png">
					 @if (Auth::check())
					 <h3 style="text-transform: uppercase; margin-top: -5px;">Bienvenido <span style="color: #2B6B1C"> {{ Auth::user()->username }} </span></h3>
					 @else
					<h3 style="text-transform: uppercase; margin-top: -5px;">¿No estás registrado?</h3>
					<div class="enjoy-css" onclick="location.href='{{ URL::to('registrar') }}';">Registrate!</div>
					@endif

				</div>
			</div>
	    </div> 
	</div>
	
	<section id="works"></section>
	<div class="posts-div">
	<div class="container" style="padding-top: 30px;">
		<div class="row centered mt mb">
			<h1 style="color: #000;">Mejores <span style="color: #2B6B1C"> PUBLICACIONES </span> </h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				      <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>

				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				     <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>

				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				     <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>

				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				    <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>

				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				      <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>

				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<div class="box">
				    <div class="cover left">
				     <h1 class="title">Example Post Title <span style="color: #2B6B1C"> 1587589p </span></h1>
				      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
				      <div class="btn"><a href="#">Read more...</a></div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
	</div>
	
	</body>
@endif