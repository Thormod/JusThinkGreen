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
	          </div>
	        </div>       
	       </section>
	       	<section id="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><a href="{{URL::to('/')}}">Inicio</a></li>
								<li class="active">Acerca de Nosotros</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<div class="container content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-sm-9 col-md-8 ">
							    <b>¿Qué somos?</b>
								<div class="post-intro">Somos una red social ecológica interactiva enfocada en compartir conocimientos, experiencias y diferentes saberes 
						        basados en el mundo ambiental y ecológico.</div>
						        <b>¿Qué has hecho para salvar el planeta?</b>
								<p>Publica tus experiencias que te han hecho cambiar de mentalidad, enséñale al mundo lo que puedes hacer en pro del planeta tierra, ¡Ayúdanos a  que el mundo pueda pensar más verde!</p>
								<b>¿Quiénes nos apoyan?</b>
								<p>Entidades gubernamentales y empresas de corte ecológico que buscan la promoción de iniciativas verdes en el mundo.</p>
							</div>	
							<div class="col-sm-3 col-md-4">	
								<img src="assets/img/just.png" class="img-responsive img-circle about-portrait" alt="JusThinkGreen, red social ambiental." width="300" height="300">
								<ul class="social-links outline text-center">
								<li><a href="https://twitter.com/JusThinkGreen"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/justhinkgreen"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#link"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>	
						</div>

				</div>
				</div>
				</div>





			@include('footer')
		</div>		

		
	
	</body>
</html>


@stop