@extends('base')

@section('content')
		@include('layouts.menu')
		<div id="wrap">
			<div id="main-nav" class="">
				<div class="container">
					<div class="nav-header">
							<a class="btn btn-blog outline-white" href="{{URL::to('/')}}">Inicio</a>
							<a class="menu-link nav-icon" href="{{URL::to('/')}}"><span class="glyphicon glyphicon-th" style="margin-left: 20px;"></span></a>
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
	            <img class="bordered img-circle" alt="" src="img/author-sing.jpg" height="96" width="96">
						<h2><b>{{Auth::user()->username}}</b></h2>
						<p>If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.<br>You can follow her on ...</p>
					 	<ul class="social-links outline-white">
							<li><a href="#link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#link"><i class="fa fa-google-plus"></i></a></li>
						</ul>
	          </div>
	        </div>       
	       </section>
	       	<section id="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><a href="{{URL::to('/')}}">Inicio</a></li>
								<li class="active">Perfil / {{Auth::user()->username}}</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


<div class="container-fluid" style="max-width:1200px; margin:auto">
	<div class="row; col-md-3" style="margin: auto;">
	<br><br>
		<div >
		  <div class="panel panel-default">
		  	<div class="panel-heading">
		  		Datos de usuario:
		  	</div>
		  	<div class="panel-body">
		  		
		  	</div>
		  	<ul class="list-group">
				  <li class="list-group-item">Nombre:</li>
				  <li class="list-group-item">Apellidos: </li>
				  <li class="list-group-item">Fecha de nacimiento: </li>
				  </ul>

			@if($user->id==Auth::User()->id)
			  	<div class="panel-footer" style="text-align: center">
			  		{{ Form::open(array('url' => 'user/edit')); }}
    				{{ Form::submit('Editar datos personales' , array('class' => 'btn smooth-scroll'));}}
					{{ Form::close() }}
			  	</div>
			@endif
		  </div>
		</div>

		<div>
		  <div class="panel panel-default">
		  	<div class="panel-heading">
		  		Logros
		  	</div>
		  	<div class="panel-body">
		  		Iconos de Logros
		  	</div>
		  </div>
		</div>

		<div>
		  <div class="panel panel-default">
		  	<div class="panel-heading">
		  		Puntos
		  	</div>
		  	<div class="panel-body">
		  		Puntos
		  	</div>
		  </div>
		</div>
	</div>
	
	<div class="row; col-md-8" style="margin: auto;">
		<div style="text-align: center; color: white; font-size: 30px;">
			Mejores Publicaciones
		</div>
		
		@foreach ($posts as $post)
			@include('post.post-short-view',array('post' => $post))
		@endforeach
		</div>
	</div>


			@include('footer')
		</div>		

		
	
	</body>
</html>


@stop