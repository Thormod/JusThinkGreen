@extends('base')

@section('content')

<body>
	<br><br><br><br>
	<div class="panel panel-default" style="text-align: center; width:auto; max-width:1200px; margin:auto">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{Form::Label($post->title)}}
		    </h3>
		  </div>
		
		<div style="text-align: center">
		</div>

		<div  style="text-align: center">
		<br>
			{{Form::Label('labContent', 'Contenido: ')}}
		</br>
			{{$post->content_text}}
		</div>
	</div>
</body>
@stop

