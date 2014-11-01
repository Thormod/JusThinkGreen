@extends('base')

<head>
<br><br><br>
<div>
	<div style="text-align: center; color: white; font-size: 30px;">
		Mejores Publicaciones
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
		    	Fecha de creación: {{$post->created_at}}, 
		    	Puntuación: {{$post->point}},
		    	<a href="/post/{{$post->id}}" class="btn btn-default" role="button">Ver publicación</a>
		    	
		  	</div>
		  </div>
		</div>
	@endforeach
</div>

</body>
