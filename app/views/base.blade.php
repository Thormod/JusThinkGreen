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
       @section('css')
       @show

      </head>
      <body style="">
       @include('header')

@endif

        @yield('content')

@if(!Request::ajax())

      </div>

    </body>
    </html>

@endif