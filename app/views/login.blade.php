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


    <div id="headerwrap-login">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="wrapper" style="margin-top:-15px; text-transform: uppercase;">
                 
            <h1 style="color: #fff;">Inicio de Sesión</h1>
            {{ Form::open(array('url' => 'login')) }}
            <div class="form-group">
            {{ Form::text('email', Input::old('email'), array('placeholder'=>'E-mail','required'=>'true','class' => 'form-control')) }}
            </div>
            <div class="form-group">
            {{ Form::text('password', Input::old('password'), array('placeholder'=>'Contraseña','required'=>'true','class' => 'form-control')) }}
            </div>
            {{ Form::submit('Entrar', array('class' => 'btn smooth-scroll')) }}
            <a class="btn smooth-scroll" href="{{  URL::to('registrar')}}">Regístrate</a>
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