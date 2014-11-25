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
	       


<head>
<br><br><br>
<div>
	<div style="text-align: center; color: white; font-size: 30px;">
		Publicaciones favoritas
	</div>
	
	@foreach ($posts as $post)
	<br>
		<div style="max-width:900px; margin: auto;">
		  <div class="panel panel-success">
		  	<div class="panel-heading">
		  		{{$post->title}}
		  	</div>
		  	<div class="panel-body">
		  		{{strip_tags(str_limit($post->content_text, 1500));}}
		  	</div>
		  	<div class="panel-footer" style="text-align: right;">
		    	Fecha de creación: {{$post->created_at}} &nbsp; &nbsp; 
		    	Puntuación: {{$post->point}} &nbsp; &nbsp;
		    	<a href="/post/{{$post->id}}" class="btn btn-default" role="button">Ver publicación</a>
		    	
		  	</div>
		  </div>
		</div>
	@endforeach
</div>

</body>




@stop
