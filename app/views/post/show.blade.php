@extends('base')

@section('content')
<body>
	<div style="text-align: center">
	<br>
	<br>
	<title>Detalle publicacion</title>
	<h1 style="text-align: center"> Contenido de publicacion </h1>
	<br>
		{{Form::Label('labTitle', 'Titulo: ')}}
	</br>
		{{Form::Label($post->title)}}
	</br>
	</br>
	</div>

	<div  style="text-align: center">
	<br>
		{{Form::Label('labContent', 'Contenido: ')}}
	</br>
		{{$post->content_text}}
	</div>

</body>
@stop

