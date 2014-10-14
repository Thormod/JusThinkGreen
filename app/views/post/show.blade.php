<!doctype html>
<body>
	<div>
		{{Form::Label('labTitle', 'Titulo: ')}}
	</div>

	<div>
		{{Form::Label($post->title)}}
	</div>
	<div>
		{{Form::Label('labContent', 'Contenido: ')}}
	</div>

	<div>
		{{Form::label($post->content_text)}}
	</div>
</body>

