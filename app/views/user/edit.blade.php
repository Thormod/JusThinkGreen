@extends('base')
<br><br><br>

{{Form::open(['route' => 'user.storeProfile'])}}
<div class="panel panel-default" style="text-align: center; width:auto; max-width:500px; margin:auto;">
	<div class='panel-body'>
		<div class="input-group">
		  <span class="input-group-addon test">Nombre</span>
		  	{{ Form::Text('firstName', Input::old('firstName'), array('class' => 'form-control')) }}
		  </div>
		<div class="input-group">
		  <span class="input-group-addon">Apellidos</span>
		  	{{ Form::Text('lastName', Input::old('lastName'), array('class' => 'form-control')) }}
		</div>
	</div>
	{{Form::submit('Editar')}}
</div>
{{Form::close()}}
