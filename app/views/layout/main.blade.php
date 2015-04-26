<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="sistem informasi e-performance ombudsman RI">
    <meta name="author" content="Lugas">
    <link rel="icon" href="../../favicon.ico">

    <title>E-Performance</title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/font-awesome.min.css')}}
    {{-- HTML::style('css/main.css') --}}
    {{HTML::style('css/style.css')}}

    <style type="text/css">
    .container > .row {
      margin: 10px auto; 
    }
    </style>
    
    @yield('styles')
    @yield('style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <!-- Fixed navbar -->
    @include('layout.menu')

    <div class="container">
      @yield('content')
    </div>

    {{HTML::script('js/jquery-2.1.3.min.js')}}
    {{HTML::script('js/bootstrap/bootstrap.min.js')}}

    @yield('scripts')
    @yield('script')

  </body>
</html>
