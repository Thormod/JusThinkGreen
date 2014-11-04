		<div id="menu" class="menu-right">
			<ul>
				
			
						{{ Form::open(array('route' => 'searchAll', 'class' => 'menu-search', 'role' => 'search', 'id' => 'frm_searchbar')) }}
							    <div class="form-group header">
							        {{ Form::text('criteria', Input::old('criteria'), array('class' => 'form-control', 'placeholder' => 'Búsqueda...','id' => 'criteria')) }}
							    </div>
							    {{ Form::close() }}
				@if(Auth::check())
				
				<li><a href="{{ URL::to('user') }}"><i class="fa fa-smile-o"></i></i>Mi perfil</a></li>
				<li><a href="{{ URL::to('publicar') }}"><i class="fa fa-pencil"></i>Publicar</a></li>
				@else
				<li><a href="{{  URL::to('login_index')}}"><i class="fa fa-paper-plane"></i>Inicia Sesión</a></li>
				<li><a href="{{  URL::to('registrar')}}"><i class="fa fa-sign-in"></i>Regístrate</a></li>
				@endif
				<li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></i>Inicio</a></li>
				<li><a href="{{URL::to('about')}}"><i class="fa fa-info-circle"></i></i>Acerca de nosotros</a></li>
				<li><a href="{{URL::to('/')}}"><i class="fa fa-briefcase"></i>Tienda</a></li>
				<li><a href="{{URL::to('/')}}"><i class="fa fa-bolt"></i>Ranking</a></li>
				<li class="submenu">
					<a href="#"><i class="fa fa-book"></i>Categorias<b class="caret"></b></a>
					<ul class="submenu-list">
						<li><a href="category.html">Blogroll <span class="badge golden">2</span></a></li>
						<li><a href="category.html">Quotes<span class="badge">4</span></a></li>
						<li><a href="category.html">Travel<span class="badge red">12</span></a></li>
						<li><a href="category.html">Writing<span class="badge blue">7</span></a></li>
					</ul>		
				</li>
				<li><a href="{{URL::to('contacto')}}"><i class="fa fa-envelope-o"></i>Contacto</a></li>
			</ul>
		</div>