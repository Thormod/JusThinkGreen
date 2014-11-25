@extends('base')

@section('js')
   {{ HTML::script('assets/js/profile.js') }}
@stop

@section('content')
		

<div class="row" style="padding: 50px 30px;">
<!-- Columna Izquierda --> 
<div class="col-sm-4">
  <!-- Pic Perfil -->
  <div class="panel panel-default">
    <div class="panel-thumbnail"><img src="{{ $user->avatar() }}" class="img-responsive"></div>
    <div class="panel-body">
      <p class="lead"></p>
      <h1><strong style="color: #2d9c29;">{ </strong>{{$user->username}} <strong style="color: #2d9c29;"> }</strong></h1>
      <p>{{$posts->count()}} Publicaciones</p>
    </div>
  </div>
  <!-- /Pic Perfil -->
  
  <!-- Gear -->
  <div class="panel panel-default">
  	<div class="panel-heading">
  		<strong>Usuario: { {{$user->username}} } </strong>
  	</div>
  	<div class="panel-body">
  		
  	</div>
  	<ul class="list-group">
		<li class="list-group-item"> <br> &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #2d9c29;">{ </strong> Nombre <strong style="color: #2d9c29;"> }</strong>:
     {{$userProfile->first_name}} </li>
		<li class="list-group-item"> <br> &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #2d9c29;">{ </strong>Apellido <strong style="color: #2d9c29;"> }</strong>:
    {{$userProfile->last_name}} </li>
	</ul>

	@if(Auth::check())
		@if($user->id==Auth::User()->id)
		  	<div class="panel-footer" style="text-align: center">
		  		<a href="../profile/edit" class="btn btn-primary" role="button">Editar datos personales</a> 
		  		<hr>
		  		<button id="btn-cambiar-imagen" class="btn btn-primary" >Cambiar imagen de perfil</button>
		  	</div>
		@endif
	@endif
  </div>
 
	<div>
	  <div class="panel panel-default">
	  	<div class="panel-heading">
	  		Logros
	  	</div>
	  	<div class="panel-body">
	  		Iconos de Logros
	  	</div>
	  </div>
	</div>
</div>

<!-- Columna Central -->
<div class="col-sm-7">

	<section class="portfolio_teasers_wrapper">
       <h2 class="section_header fancy centered">Últimas publicaciones</h2>

       <div class="portfolio_strict row">

		@foreach ($posts as $post)
			@include('post.post-short-view',array('post' => $post))
		@endforeach
	    
	    </div>
    </section>
			
</div>
<!-- /Columna Central -->
</div>
</div>	}



<div class="modal fade" id="modal-cambiar-imagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      {{ Form::open(array('route' => 'change_image_user_path','files' => true)) }}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="myModalLabel">Cambiar imagen</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" value="" class="form-control" readonly="">
                                <span class="input-group-btn">
                                    <span id="span-btn-file" class="btn btn-primary btn-file">
                                        Seleccionar...
                                        <input id="file-photo2" accept="image/*" name="photo" type="file">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>


</body>
</html>


@stop
