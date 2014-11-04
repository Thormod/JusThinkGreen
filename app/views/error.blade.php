@extends('base')

@section('content')
    @include('layouts.menu')
    <div id="wrap">
      <div id="main-nav" class="">
        <div class="container">
          <div class="nav-header">
              <a class="btn btn-blog outline-white" href="#">Inicio</a>
              <a class="menu-link nav-icon" href="#"><span class="glyphicon glyphicon-th" style="margin-left: 20px;"></span></a>
              @if(!Auth::check())
              <a class="btn btn-blog outline-white pull-right" href="{{  URL::to('login_index') }}" >Login</a>
              @else
              <a class="btn btn-blog outline-white pull-right" href="{{  URL::to('logout') }}" >Logout</a>
              @endif
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
          <section id="breadcrumb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}">Inicio</a></li>
                <li class="active">Inicia Sesión para continuar</li>
              </ol>
            </div>
          </div>
        </div>
      </section>


      <div class="container content">
        
           
                <img src="assets/img/error.jpg" class="img-responsive img-circle about-portrait" alt="JusThinkGreen, red social ambiental." width="300" height="300">
                
              </div>  






      @include('footer')
    </div>    

    
  
  </body>
</html>


@stop