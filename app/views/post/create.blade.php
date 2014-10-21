@extends('base')

@section('content')	

{{ HTML::script('packages/ckeditor/ckeditor/ckeditor.js') }}

{{ Form::open(['route' => 'post.store']) }}

	<div style="text-align: center">
	<br>
	<br>
	<title>Crear Publicacion</title>
	<h1 style="text-align: center"> Crear Publicacion </h1>
	<br>
		{{Form::Label('labTitle', 'Titulo: ')}}
	</br>
		{{Form::Text('title')}}
		{{$errors->first('title', 'Titulo requerido')}}
	</br>
	</br>
	</div>

	<div  style="text-align: center">
	<br>
		{{Form::Label('labContent', 'Contenido: ')}}
	</br>

		{{Form::Textarea('content_text')}}
		<script>

			$content = CKEDITOR.replace( 'content_text', {
				height: 350,
			});

			$editor_data = CKEDITOR.instances.content_text.getData();
		</script>	
		{{$errors->first('content_text', 'Contenido requerido')}}	
	</div>
	
	<div style="text-align: center">
		{{Form::submit('Crear publicacion')}}
	</div>

{{ Form::close() }}

@stop