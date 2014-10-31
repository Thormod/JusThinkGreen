@extends('base')

@section('content')	

{{ HTML::script('packages/ckeditor/ckeditor/ckeditor.js') }}

<br><br><br>
<div class="panel panel-default" style="text-align: center; width:auto; max-width:1400px; margin:auto;">
	
	<div class="panel-heading">
		Crear Publicacion
	</div>

	<div class="panel-body">
		{{ Form::open(['route' => 'post.store']) }}

		<div style="text-align: center">
			{{Form::Label('labTitle', 'Titulo: ')}}
			{{Form::Text('title')}}
			{{$errors->first('title', 'Titulo requerido')}}
		</div>
		<div>
			{{Form::Textarea('content_text')}}
			<script>

				$content = CKEDITOR.replace( 'content_text', {
					height: 350,
				});

				$editor_data = CKEDITOR.instances.content_text.getData();
			</script>	
			{{$errors->first('content_text', 'Contenido requerido')}}	
		</div>
	</div>

	<div class="panel-footer">
	<div style="text-align: center">
			{{Form::submit('Crear publicacion')}}
		</div>
	</div>

	{{ Form::close() }}
</div>
@stop