@extends('base')

@section('content')


		@include('layouts.menu')
		<div id="wrap">
			<div id="main-nav" class="">
				<div class="container">
					<div class="nav-header">
							<a class="btn btn-blog outline-white" href="{{URL::to('/')}}">Inicio</a>
							<a class="menu-link nav-icon" href="{{URL::to('/')}}"><span class="glyphicon glyphicon-th" style="margin-left: 20px;"></span></a>
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
	            <img class="bordered img-circle" alt="" src="img/author-sing.jpg" height="96" width="96">
						<h2><b></b></h2>
						<p>If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.<br>You can follow her on ...</p>
					 	<ul class="social-links outline-white">
							<li><a href="#link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#link"><i class="fa fa-google-plus"></i></a></li>
						</ul>
	          </div>
	        </div>       
	       </section>




<div class="container-fluid" style="max-width:1200px; margin:auto">
	<div>
	<br>
	  <div class="panel panel-default">
	  	<div class="panel-heading" style="text-align: center;">
	  		<b>Rankings</b>
	  	</div>

	  	 <!-- Top 10 -->
	  	<div class="panel-body">
	  	 <div class="panel panel-default">
		   <div class="panel-heading" style="text-align: center;">
		  		<b>Top 10 usuarios</b>
		   </div>
		  	
		   <div class="panel-body">
		     <table class="table" style="max-width: 500px;">
		  	   	<thread>
			  	   	<tr>
			  	   		<th>
			  	   			#	
			  	   		</th>
			  	   		<th>
			  	   			Usuario
			  	   		</th>
			  	   		<th>
			  	   			Puntos
			  	   		</th>
			  	   	</tr>
		  	   	</thread>
		  	   	<tbody>
		  	   		<!--{{$i = 1;}}-->
			  	   	@foreach ($top10user as $user)
	 					<tr>
	 						<th>
	 							{{$i++;}}
	 						</th>
	 						<th>
	 							<a href="user/{{$user->id}}">{{$user->first_name;}}</a>
	 						</th>
	 						<th>
	 							{{$user->points;}}
	 						</th>
	 					</tr>
			  	   	@endforeach   
		  	   	</tbody>
			 </table>
		   </div>
		 </div>
	  	</div>
	  
	  	 <!-- Top 10 post -->
	  	<div class="panel-body">
	  	 <div class="panel panel-default">
		   <div class="panel-heading" style="text-align: center;">
		  		<b>Mejores publicaciones</b>
		   </div>
		  	
		   <div class="panel-body">
		  	 <table class="table" style="max-width: 500px;">
		  	   	<thread>
			  	   	<tr>
			  	   		<th>
			  	   			#	
			  	   		</th>
			  	   		<th>
			  	   			Titulo
			  	   		</th>
			  	   		<th>
			  	   			Puntos
			  	   		</th>
			  	   	</tr>
		  	   	</thread>
		  	   	<tbody>
		  	   		<!--{{$i = 1;}}-->
			  	   	@foreach ($top10post as $post)
	 					<tr>
	 						<th>
	 							{{$i++;}}
	 						</th>
	 						<th>
	 							<a href="post/{{$post->id}}">{{$post->title;}}</a>
	 						</th>
	 						<th>
	 							{{$post->point;}}
	 						</th>
	 					</tr>
			  	   	@endforeach   
		  	   	</tbody>
			 </table>
		   </div>
		 </div>
	  	</div>
	  
	  	 <!-- Top 10 post mes-->
	  	<div class="panel-body">
	  	 <div class="panel panel-default">
		   <div class="panel-heading" style="text-align: center;">
		  		<b>Mejores publicaciones este mes</b>
		   </div>
		  	
		   <div class="panel-body">
		  	 <table class="table" style="max-width: 500px;">
		  	   	<thread>
			  	   	<tr>
			  	   		<th>
			  	   			#	
			  	   		</th>
			  	   		<th>
			  	   			Titulo
			  	   		</th>
			  	   		<th>
			  	   			Puntos
			  	   		</th>
			  	   	</tr>
		  	   	</thread>
		  	   	<tbody>
		  	   		<!--{{$i = 1;}}-->
			  	   	@foreach ($top10month as $month)
	 					<tr>
	 						<th>
	 							{{$i++;}}
	 						</th>
	 						<th>
	 							<a href="post/{{$month->id}}">{{$month->title;}}</a>
	 						</th>
	 						<th>
	 							{{$month->point;}}
	 						</th>
	 					</tr>
			  	   	@endforeach   
		  	   	</tbody>
			 </table>
		   </div>
		 </div>
	  	</div>

	  	<!-- Top 10 post semana-->
	  	<div class="panel-body">
	  	 <div class="panel panel-default">
		   <div class="panel-heading" style="text-align: center;">
		  		<b>Mejores publicaciones esta semana</b>
		   </div>
		  	
		   <div class="panel-body">
		  	 <table class="table" style="max-width: 500px;">
		  	   	<thread>
			  	   	<tr>
			  	   		<th>
			  	   			#	
			  	   		</th>
			  	   		<th>
			  	   			Titulo
			  	   		</th>
			  	   		<th>
			  	   			Puntos
			  	   		</th>
			  	   	</tr>
		  	   	</thread>
		  	   	<tbody>
		  	   		<!--{{$i = 1;}}-->
			  	   	@foreach ($top10week as $week)
	 					<tr>
	 						<th>
	 							{{$i++;}}
	 						</th>
	 						<th>
	 							<a href="post/{{$week->id}}">{{$week->title;}}</a>
	 						</th>
	 						<th>
	 							{{$week->point;}}
	 						</th>
	 					</tr>
			  	   	@endforeach   
		  	   	</tbody>
			 </table>
		   </div>
		 </div>
	  	</div>
	  
	  

	  </div>
	</div>
</div>
@stop