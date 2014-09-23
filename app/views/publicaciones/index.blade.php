@extends('header')

@section('contenido')
<head>

	<meta charset="utf-8">
	<style>
	body{
		font: 15px Arial;
		color:#000;
	}

	li{
		list-style: none;
	}

	#publicacion{
		padding:30px;
		background: lightgreen;
		border: 2px solid black;
		width: 500px;
		height: 100px;	
		margin-left: 30px;	
	}
	#publicacion a{
		text-decoration: none;
	}

	</style>
</head>



<body>
	<title>Publicaciones</title>
	<h1 style="text-align: center"> Lista de Publicaciones </h1>

	@foreach ($publicaciones as $publicacion)
	<br></br>
		<ul>

			<li><div id=publicacion>
				
				<a>Titulo: {{link_to("/publicaciones/{$publicacion->id}",$publicacion->titulo)}}</a>
				<br></br>
				<a>Autor: {{link_to("/usuario/{$publicacion->autor}",$publicacion->autor)}}</a>
				<br></br>
				<a>Tags: {{$publicacion->tags}}</a>
				<br></br>
				<a>Calificación promedio: {{$publicacion->calificacionPromedio}} 
										  - Fecha de creación: {{$publicacion->created_at}}</a>
			</div></li>	
		</ul>	
	@endforeach

</body>
@stop