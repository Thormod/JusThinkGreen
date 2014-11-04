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
								<li class="active">{{Form::Label($post->title)}}</li>
								<li class="active">{{Link_to("/user/{$user->id}", $user->username)}}</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

	<div class="panel panel-default" style="width:auto; max-width:1200px; margin:auto">
		<div class="panel-heading">
		  <h3 class="panel-title" style="text-align: center;">{{Form::Label($post->title)}}
		  </h3>
		</div>
		
		<div class="panel-body">
			{{$post->content_text}}
		</div>

		<div class="panel-footer">
			<div style="text-align: right;">
				Ultima modificacion: {{$post->updated_at}}
				&nbsp; &nbsp;
				Creado por: {{Link_to("/user/{$user->id}", $user->username)}}
			</div>
		</div>
	</div>

			@include('footer')
		</div>		

		
	
	</body>
</html>


@stop

