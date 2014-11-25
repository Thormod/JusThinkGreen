@if(!Request::ajax())

      <!DOCTYPE html>
      <head>
        <!-- Meta Section -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Meta Section -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
        <title>

          @section('title')
            JusThinkGreen
          @show
        </title>

        <!-- CSS Section -->
         {{ HTML::style('assets/css/animate.css') }}
         {{ HTML::style('assets/css/global.css') }}
         {{ HTML::style('assets/css/animate.css') }}
         {{ HTML::style('assets/css/flexslider.css') }}
         {{ HTML::style('assets/css/prettyPhoto.css') }}
         {{ HTML::style('assets/lib/bootstrap/css/bootstrap.min.css') }}
         {{ HTML::style('assets/css/global.css') }}
         {{ HTML::style('assets/css/font-awesome-4.1.0/css/font-awesome.min.css') }}
         @section('css')
         @show
        <!-- /CSS Section -->

        <!-- /FontAwesome -->

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">
        <link rel="shortcut icon" href="favicon.png">
        <!-- /Favicon and touch icons -->

      </head>
      @include('header')
      <body style="">
        
        
        @yield('content')
        
        @include('layouts.footer')


        @endif

       

      @if(!Request::ajax())

      </div>

      <!-- Scripts section -->
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery-1.9.0.min.js"><\/script>')</script>

      {{ HTML::script('assets/js/bootstrap.min.js') }}
      {{ HTML::script('assets/js/jquery.flexslider-min.js') }}
      {{ HTML::script('assets/js/jquery.isotope.min.js') }}
      {{ HTML::script('assets/js/jquery.prettyPhoto.js') }}
      {{ HTML::script('assets/js/jquery.ui.totop.js') }}
      {{ HTML::script('assets/js/easing.js') }}
      {{ HTML::script('assets/js/wow.min.js') }}
      {{ HTML::script('assets/js/snap.svg-min.js') }}
      {{ HTML::script('assets/js/collapser.js') }}
      {{ HTML::script('assets/js/modernizr.custom.48287.js') }}
      {{ HTML::script('assets/js/restart_theme.js') }}

      @section('js')
      @show

      <!--<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js" charset="utf-8"></script>
      <script type="text/javascript" src="assets/js/jquery.isotope.min.js" ></script>
      <script type="text/javascript" src="assets/js/jquery.ui.totop.js"></script>
      <script type="text/javascript" src="assets/js/easing.js"></script>
      <script type="text/javascript" src="assets/js/wow.min.js"></script>
      <script type="text/javascript" src="assets/js/snap.svg-min.js"></script>
      <script type="text/javascript" src="assets/js/restart_theme.js"></script>
      <script type="text/javascript" src="assets/js/collapser.js"></script>
      <script type="text/javascript" src="assets/js/modernizr.custom.48287.js"></script>-->
      <!-- /Scripts section -->


    </body>
    </html>

@endif