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
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">
          {{HTML::image('img/garuda.png', 'logo', array('class'=> 'logo'))}}E-Performance Ombudsman</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            {{-- <li class="active">{{HTML::linkRoute('home','Menu Utama')}}</li>
            <li>{{ HTML::linkRoute('rkt.index', 'RKT') }}</li> --}}
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>{{ HTML::linkRoute('renstra.index', 'Rencana Strategis') }}</li>
                <li><a href="#">Rencana Kegiatan Tahunan</a></li>
                <li><a href="#">Penetapan Kinerja</a></li>
                <li><a href="#">Capaian Penetapan Kinerja</a></li>
                <li><a href="#">Anggaran</a></li>
              </ul>
            </li>
            <!-- <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>

          @if(Sentry::check())
          <ul class="nav navbar-nav navbar-right">
            <li>
            {{Html::linkRoute('auth.logout','Logout')}}
            </li>
          </ul>
          @endif 
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    {{HTML::script('js/jquery-2.1.3.min.js')}}
    {{HTML::script('js/bootstrap/bootstrap.min.js')}}

    @yield('scripts')
    @yield('script')

  </body>
</html>
