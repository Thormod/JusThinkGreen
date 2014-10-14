</body>
 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('/') }}">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Rankings</a></li>
            <li><a href="#">Tienda</a></li>
            @if (Auth::check())
            <li><a href="#">{{ Auth::user()->username }}</a></li>
            <li><a href="{{ URL::to('logout') }}">Cerrar Sesión</a></li>
            @else
            <li><a href="{{ URL::to('login_index') }}">Iniciar Sesion</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>