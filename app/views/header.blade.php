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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Crear Post</a></li>
                <li><a href="#">Calificar Post</a></li>
              </ul>
            </li>
            <li><a href="{{ URL::to('logout') }}">Cerrar Sesión</a></li>
            @else
            <li><a href="{{ URL::to('login_index') }}">Iniciar Sesion</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>