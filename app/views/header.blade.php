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
          <a class="navbar-brand" href="{{ URL::to('/') }}">JusThinkGreen</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ URL::to('/') }}">Inicio</a></li>
            <li><a href="about.html">Categorias</a></li>
            <li><a href="#works">Rankings</a></li>
            <li><a href="#works">Tienda</a></li>
            <li><a href="{{ URL::to('login_index') }}">Iniciar Sesion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>