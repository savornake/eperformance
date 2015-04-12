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
    {{HTML::style('css/summernote.css')}}
    {{HTML::style('css/summernote-bs3.css')}}


{{HTML::script('js/jquery-2.1.3.min.js')}}

    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/summernote.min.js')}}
    {{HTML::style('css/style.css')}}



     @yield('css')


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
            <li class="active">{{HTML::linkRoute('home','Menu Utama')}}</li>

            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul> -->
            </li>
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
      
  
  <!-- Disisi apa aja-->
     @yield('content')
    </div>

  </body>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    
    @yield('script')


  </body>
</html>
