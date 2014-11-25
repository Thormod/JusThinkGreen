<!-- Header -->
<header>
    
    <div class="container">
          <div class="navbar navbar-default" role="navigation">

               <!-- NavBrand -->

               <div class="navbar-header"><a class="navbar-brand" href="{{ URL::to('/') }}"> <img src="http://justhinkgreen.com/public/assets/images/restart_logo.png" alt="optional logo" height="90" width="90"> 
               <span class="logo_title"><strong>Jus</strong><strong style="color: #098b39;">{Think}</strong><strong>Green</strong></span> 
               <span class="logo_subtitle">Unidos en un solo pensamiento.</span> </a>
               <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="nb_left pull-left"> <span class="fa fa-reorder"></span></span> 
               <span class="nb_right pull-right">menu</span> </a></div>

               <!-- /NavBrand -->

               <div class="collapse navbar-collapse">

                    <ul class="nav pull-right navbar-nav">
                         <li class="active"><a href="{{ URL::to('/') }}">Inicio</a></li>
                         <li><a href="{{ URL::to('about')}}">Acerca de Nosotros</a></li>
                         <li><a href="{{ URL::to('rankings') }}">Rankings</a></li>
                         <li><a href="portfolio.html">Tienda</a></li>
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="{{ URL::to('contacto') }}">Contacto</a></li>
                    </ul>

               </div>
          </div>
          @if (!Auth::check())
          <div id="social_media_wrapper"> 
          <a href="{{ URL::to('loginWithFacebook') }}"><i class="fa fa-facebook"></i></a> 
          <a href="https://twitter.com"><i class="fa fa-twitter"></i></a> 
          <a href="{{ URL::to('loginWithFacebook') }}"><i class="fa fa-google-plus"></i></a> </div>

          
          <div id="sign"><a href="{{ URL::to('login_index') }}"><i class="fa fa-user"></i><span> Registrar/Iniciar Sesión</span></a></div>
          @else
          <div id="sign"><a href="{{ URL::to('user/'.Auth::User()->id) }}"><i class="fa fa-user"></i><span> {{ Auth::user()->username }}</span></a>
          <a href="{{ URL::to('publicar') }}"><i class="fa fa-cloud-upload"></i></a>
          <a href="{{ URL::to('logout') }}"><i class="fa fa-cogs"></i></a>
          <a href="{{ URL::to('logout') }}"><i class="fa fa-power-off"></i></a></div>
          @endif

     </div>

</header>
<!-- /Header -->