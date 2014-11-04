@extends('base')

@section('content')

    @include('layouts.menu')
    <div id="wrap">
      <div id="main-nav" class="">
        <div class="container">
          <div class="nav-header">
              <a class="btn btn-blog outline-white" href="{{ URL::to('/')}}">Inicio</a>
              <a class="menu-link nav-icon" href="#"><span class="glyphicon glyphicon-th" style="margin-left: 20px;"></span></a>
              <a class="btn btn-blog outline-white pull-right" href="{{  URL::to('login_index') }}" >Login</a>
            </div>
        </div>
      </div>
          
      <section id="hero" class="light-typo">

        <div id="cover-image" class="image-bg animated fadeIn"></div>
        <div class="container welcome-content">
          <div class="middle-text">
            <img src="assets/img/logo3.png">
          </div>
        </div>       
       </section>


        
 <div id="headerwrap-login" style="margin-top: 50px;">
 		 @include('layouts.notifications')
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="wrapper" style="margin-top:-15px;">
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
			<div class="form-group" >
				{{ Form::label('password_confirmation', 'Verificar contraseña') }}
				{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
			</div>
			 {{ Form::submit('Registrar', array('class' => 'btn smooth-scroll')) }}
			{{ Form::close() }}
			</div>
      </div>
      </div> 
  </div>
 </div>
 @include('footer')
 </div>

  </body>


@stop