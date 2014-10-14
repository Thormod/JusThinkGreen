@extends('base')

@section('content')
<head>

	<style>


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
	<br></br>
	<title>Publicaciones</title>
	<h1 style="text-align: center"> Lista de Publicaciones </h1>

	@foreach ($posts as $post)
	<br></br>
		<ul>

			<li><div id=publicacion>
				
				<a>Titulo: {{link_to("/post/{$post->id}",$post->title)}}</a>
				<br></br>
				<a>Calificación promedio: {{$post->point}} 
										  - Fecha de creación: {{$post->created_at}}</a>
			</div></li>	
		</ul>	
	@endforeach

</body>

@stop

