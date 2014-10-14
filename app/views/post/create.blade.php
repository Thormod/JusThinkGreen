<!doctype html>
	
{{ Form::open(['route' => 'post.store']) }}

	<div>
		{{Form::Label('labTitle', 'Titulo: ')}}
		{{Form::Text('title')}}
		{{$errors->first('title', 'Titulo requerido')}}
	</div>

	<div>
		{{Form::Label('labContent', 'Contenido: ')}}
		{{Form::TextArea('content_text')}}
		{{$errors->first('content_text', 'Contenido requerido')}}	
	</div>
	
	<div>
		{{Form::submit('Crear publicacion')}}
	</div>

{{ Form::close() }}