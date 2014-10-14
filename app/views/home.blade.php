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
					<h3 style="text-transform: uppercase; margin-top: -10px;">¿No estás registrado?</h3>
					<div class="enjoy-css" onclick="location.href='{{ URL::to('registrar') }}';">Registrate!</div>

				</div>
			</div>
	    </div> 
	</div>
	section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio01.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio02.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio03.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio04.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio05.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="work.html"><img src="assets/img/portfolio/folio06.png" class="img-responsive"></a>
			</div>
		</div><! --/row -->
	</div><! --/container -->

	</body>
@endif