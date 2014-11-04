@if(!Request::ajax())

      <!DOCTYPE html>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
         @section('title')
         JusThinkGreen
         @show
       </title>


       {{ HTML::style('assets/lib/bootstrap/css/bootstrap.min.css') }}
       {{ HTML::style('assets/css/global.css') }}
       {{ HTML::style('assets/css/font-awesome-4.1.0/css/font-awesome.css')}}
       {{ HTML::style('assets/css/font-awesome-4.1.0/css/font-awesome.min.css')}}
       @section('css')
       @show

      </head>
      <body style="">

      



@endif

        @yield('content')
        

@if(!Request::ajax())
      
      </div>
      
    <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>

    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/ga.js"></script>

    </body>
    </html>

@endif