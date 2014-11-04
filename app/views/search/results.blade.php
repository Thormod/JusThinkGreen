
@extends('base')

@section('content')
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
								<li class="active">Busqueda: {{{ Input::get('criteria') }}}</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

<center><h3><b>Resultados de la busqueda:<span>{{{ Input::get('criteria') }}}</span></h3>
<hr>
<div class="container">
	<div class="row">
    

@if(Route::getCurrentRoute()->getName()==='searchAll')
	<center>{{ $posts->appends(array('criteria' => Input::get('criteria')))->links() }}</center>
@else
	<center>{{ $posts->appends(array('srch_title' => Input::get('srch_title'),'srch_genre' => Input::get('srch_genre'),'srch_place_name' => Input::get('srch_place_name')))->links() }}</center>
@endif

@foreach($posts as $post)
	@include('post.post-short-view',array('post' => $post))
@endforeach

@if(Route::getCurrentRoute()->getName()==='searchAll')
	<center>{{ $posts->appends(array('criteria' => Input::get('criteria')))->links() }}</center>
@else
	<center>{{ $posts->appends(array('srch_title' => Input::get('srch_title'),'srch_genre' => Input::get('srch_genre'),'srch_place_name' => Input::get('srch_place_name')))->links() }}</center>
@endif


		</div>
		</div>



		

		@include('footer')
		</div>

		<script>
		$('.pagination a').on('click', function (event) {
		    event.preventDefault();
		    if ( $(this).attr('href') != '#' ) {
		        $("html, body").animate({ scrollTop: 0 }, "fast");
		        $('#main-container').load($(this).attr('href'));
		    }
		});
		</script>

	</body>
</html>


@stop