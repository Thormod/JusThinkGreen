@extends('base')

@section('content')
		{{ HTML::script('packages/ckeditor/ckeditor/ckeditor.js') }}
		@include('layouts.menu')
		<div id="wrap">
			<div id="main-nav" class="">
				<div class="container">
					<div class="nav-header">
							<a class="btn btn-blog outline-white" href="{{URL::to('/')}}">Inicio</a>
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
								<li class="active">Publicar</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

<div class="panel panel-default" style="text-align: center; width:auto; max-width:1400px; margin:auto;">
	
	<div class="panel-body">
		{{ Form::open(['route' => 'post.store']) }}

		<div style="text-align: center">
			{{Form::Label('labTitle', 'Título: ')}}
		</div>
		<div style="text-align: center">
			{{Form::Text('title')}}
			{{$errors->first('title', 'Titulo requerido')}}
		</div>
		<div style="text-align: center">
			{{Form::Label('labTitle', 'Descripción: ')}}
		</div>
		<div style="text-align: center">
			
			{{Form::textarea('description')}}
			{{$errors->first('description', 'Descripción requerido')}}
		</div>
		<div>
			{{Form::Textarea('content_text')}}
			<script>

				$content = CKEDITOR.replace( 'content_text', {
					height: 350,
				});

				$editor_data = CKEDITOR.instances.content_text.getData();
			</script>	
			{{$errors->first('content_text', 'Contenido requerido')}}	
		</div>
	</div>

	<div class="panel-footer">
	<div style="text-align: center">
			{{Form::submit('Crear publicacion' , array('class' => 'btn smooth-scroll'))}}
		</div>
	</div>

	{{ Form::close() }}
	</div>	
			@include('footer')
		
		</div>	


		
	
	</body>
</html>


@stop