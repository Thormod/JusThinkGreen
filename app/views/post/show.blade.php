@extends('base')

@section('content')
		
	<div class="panel panel-default" style="width:auto; max-width:1200px; margin:50px;">
		<div class="panel-heading">
		  <h3 class="panel-title" style="text-align: center;"><strong style="color: #2d9c29;">{ </strong> Título <strong style="color: #2d9c29;"> }</strong>: {{Form::Label($post->title)}}
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
	
	</body>
</html>


@stop

