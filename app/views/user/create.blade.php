@extends('base')

@section('content')

 <div id="headerwrap-login">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="wrapper">
			{{ Form::open(array('url' => 'registrar')) }}
			<div class="form-group">
				{{ Form::label('username', 'Username') }}
				{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('email', 'Correo electrónico') }}
				{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Contraseña') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
			</div>
			<div class="form-group" style="color:#000;">
				{{ Form::label('password_confirmation', 'Verificar contraseña') }}
				{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
			</div>
			{{ Form::submit('Registrarse', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
			        </div>
      </div>
      </div> 
  </div>

@stop