@extends('header')

@section('contenido')
<head>
	<meta charset="utf-8">
	<style>

		body{

			font: 15px Arial;
			color:#000;
		}

		#paginaPrincipal {
			padding:30px;
			background: none;
			border-radius: 10px;
			border: 5px solid lightgreen;

		}
		#titulo {
			letter-spacing: 0.5em;
			word-spacing: 0.5em;
			line-height: 5;
			text-align: center;
			font: 30px Arial;

		}
		#contenido {
			letter-spacing: 0em;
			word-spacing: 0.2em;
			line-height: 5;
			text-align: left;
			font: 20px Arial;
		}		
		#acciones {
			padding:30px;
			background: none;
			border: 5px solid lightgreen;
		}
		#comentariosBdy{
			padding:30px;
			background: none;
			border: 5px solid gray;
			text-align: center;
		}
		#comentarios{
			padding:30px;
			background: lightgray;
			border: 5px solid gray;
			font:15px Arial;
		}
		.autor{
			float: right;
		}

	</style>
</head>
<body>

<title> {{$publicacion->titulo}} </title>

<div id="paginaPrincipal">
 	<div id="titulo"><b>
 		{{$publicacion->titulo}}
 		<br></br>
 	</b></div>

 	<div id="contenido">
 		{{$publicacion->contenido}}
 	</div>
</div>

<div id="acciones">
	<div class="autor">
		Publicación creada por: {{link_to("/usuario/$publicacion->autor", "$publicacion->autor")}}
	</div>
</div>
	
<div id="comentariosBdy">
	<b>Comentarios</b>
	<br></br>
		@if (sizeof($comentarios) > 0)	
			@foreach ($comentarios as $comentario)
				<div id="comentarios">
					{{$comentario->contenido}}
				</div>
			@endforeach
		@else
			<div id="comentarios">
				No hay comentarios	
			</div>
		@endif
	</div>

</body>

@stop