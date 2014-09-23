<!doctype html>

<head>
	<style>
		
		*{
			margin: 0; 
			padding: 0;
		}

		body{
			font: 15px Arial;
			background: white;

		}

		#header{
			background: gray;
			height: 150px;
			width: 100%;

		}
		.contenedor{
			height: 150px;
			width: 500px;
			margin: 0 auto;
			background: gray;
			float: left;
		}
		#navegacion{
			height: auto;
			float: left;
		}
		#iconoNav{
			list-style: none;
			margin-top: 125px;
		}
		#iconoNav a{
			color: black;
			text-decoration: none;
		
		}
		#iconoNav li{
			float: left;
			margin-left: 10px;
			border: 2px solid lightgray;
			background: lightgray;
		}
		#logoPagina{
			height: 150px;
			width: 300px;
			background-image: url('img/logo2.png');
			float: right;
		}

	</style>
</head>

<body>
	<div id="header">
		<div class="contenedor">
			<div id="navegacion">
				<ul id="iconoNav">	
					<a><li>{{link_to("/", "Inicio")}}</li></a>
					<a><li>{{link_to("/publicaciones", "Publicaciones")}}</li></a>
					<a><li>{{link_to("/busqueda" , "Busqueda")}}</li></a>
					<a><li>{{link_to("/rankings", "Rankings")}}</li></a>
					<a><li>{{link_to("/tienda", "Tienda")}}</li></a>
					<a><li>{{link_to("/about", "About")}}</li></a>
				</ul>
			</div>
		</div>
	</div>


@yield('contenido')

</body>
