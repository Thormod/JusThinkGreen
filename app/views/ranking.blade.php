@extends('base')

@section('content')


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