@extends('base')
<br><br><br>

{{Form::open(['route' => 'user.storeProfile'])}}
<div class="panel panel-default" style="text-align: center; width:auto; max-width:500px; margin:auto;">
	<div class='panel-body'>
		<div class="input-group">
		  <span class="input-group-addon test">Nombre</span>
		  	{{ Form::Text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
		  	{{$errors->first('first_name', 'Maximo 16 caracteres')}}
		  </div>
		<div class="input-group">
		  <span class="input-group-addon">Apellidos</span>
		  	{{ Form::Text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
		  	{{$errors->first('last_name', 'Maximo 20 caracteres')}}
		</div>
	</div>
	{{Form::submit('Editar')}}
</div>
{{Form::close()}}
