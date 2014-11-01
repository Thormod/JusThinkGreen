@extends('base')
<br><br><br>


<div class="container-fluid" style="max-width:1200px; background-color: black; margin:auto">
	<div class="row; col-md-3" style="margin: auto;">
	<br><br>
		<div >
		  <div class="panel panel-default">
		  	<div class="panel-heading">
		  		Datos de usuario
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
    				{{ Form::submit('Editar datos personales');}}
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
			<div style="max-width:800px; margin: auto;">
			  <div class="panel panel-success">
			  	<div class="panel-heading">
			  		{{$post->title}}
			  	</div>
			  	<div class="panel-body">
			  		{{strip_tags(str_limit($post->content_text, 1500));}}
			  	</div>
			  	<div class="panel-footer" style="text-align: right">
			    	Puntuación: {{$post->point}} <a href="/post/{{$post->id}}" class="btn btn-default" role="button">Ver publicación</a>
			  	</div>
			  </div>
			</div>
		@endforeach
	</div>
</div>