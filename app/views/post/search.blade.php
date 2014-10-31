@extends('base')

@section('content')

{{ HTML::style('assets/css/search.css') }}
<br><br><br>

<div class='body2'>

<div class='opciones'>
	{{Form::open()}}
	<div>
		{{Form::label('Contenido')}}
		{{Form::checkBox('content', '1', true);}}
		{{Form::Text('content');}}	
	</div>

	<div>
		{{Form::label('Puntos: ')}}
		{{Form::checkBox('points');}}
		{{Form::Number('points');}}	
	</div>

	<div>
		{{Form::label('Fecha: ');}}
		{{Form::select('date', array('all' => 'Todo el tiempo', 'oneweek' => 'Una semana', 'twoweeks' => 'Dos semanas', 'onemonth' => 'Un mes', 'sixmonths' => 'Seis meses'), 'all');}}	
	</div>
	{{Form::close()}}
</div>

</div>