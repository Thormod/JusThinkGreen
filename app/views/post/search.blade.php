@extends('base')

@section('content')

{{ HTML::style('assets/css/search.css') }}
<br><br><br>

<body>
	<div class="panel panel-default" style="text-align: center; width:auto; max-width:500px; margin:auto">
		  <div class="panel-heading">
		    <h3 class="panel-title">Busqueda</h3>
		  </div>
		<div>
			{{Form::open()}}
			<div style="margin:auto">
				{{Form::label('Contenido')}}
				{{Form::checkBox('content', '1', true);}}
				{{Form::Text('content');}}	
			</div>

			<div>
				{{Form::label('Puntos: ')}}
				{{Form::checkBox('points');}}
				{{Form::Number('firstPoint');}}
				{{Form::label('-')}}
				{{Form::Number('secondPoint');}}
			</div>

			<div>
				{{Form::label('Fecha: ');}}
				{{Form::select('date', array('all' => 'Todo el tiempo', 'oneweek' => 'Una semana', 'twoweeks' => 'Dos semanas', 'onemonth' => 'Un mes', 'sixmonths' => 'Seis meses'), 'all');}}	
			</div>

			<div>
				<br>
				{{Form::submit('Buscar')}}
			</div>
			{{Form::close()}}
		</div>
	</div>
</body>