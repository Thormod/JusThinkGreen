@if(!Request::ajax())
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
         @section('title')
         JusThinkGreen
         @show
       </title>

  {{ HTML::style('assets/lib/bootstrap/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/global.css') }}
  </head>
  <body>
  @include('header')

    <div id="headerwrap-login">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="wrapper">
            <form class="form-signin">       
              <h1 style="color: #000;">Inicio de Sesión</h1>
              {{ Form::open(array('url' => 'login')) }}
            <div class="form-group">
            {{ Form::text('email', Input::old('email'), array('placeholder'=>'E-mail','required'=>'true','class' => 'form-control')) }}
            </div>
            <div class="form-group">
            {{ Form::text('password', Input::old('password'), array('placeholder'=>'Contraseña','required'=>'true','class' => 'form-control')) }}
            </div>
            {{ Form::submit('Entrar', array('class' => 'btn btn-primary btn-block')) }}
            {{ Form::close() }}  
             </form>
          </div>
        </div>
      </div>
      </div> 
  </div>

  </body>
@endif

