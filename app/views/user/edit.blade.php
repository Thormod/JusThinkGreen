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


<br><br><br>

{{Form::open(['route' => 'userProfile.storeProfile'])}}
<div class="panel panel-default" style="text-align: center; width:auto; max-width:500px; margin:auto;">
	<div class='panel-body'>
		<div class="input-group">
		  <span class="input-group-addon test">Nombre</span>
		  	{{ Form::Text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
		  	{{$errors->first('first_name', 'Maximo 16 caracteres')}}
		  </div>
		<div class="input-group">
		  <span class="input-group-addon">Apellidos</span>
		  	{{ Form::Text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
		  	{{$errors->first('last_name', 'Maximo 20 caracteres')}}
		</div>
	</div>
	{{Form::submit('Editar')}}
</div>
{{Form::close()}}
@stop
