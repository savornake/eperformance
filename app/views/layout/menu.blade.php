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
        {{HTML::image('img/garuda.png', 'logo', array('class'=> 'logo'))}}E-Performance Ombudsman
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        {{-- <li class="active">{{HTML::linkRoute('home','Menu Utama')}}</li>
        <li>{{ HTML::linkRoute('rkt.index', 'RKT') }}</li> --}}

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>{{ HTML::linkRoute('renstra.index', 'Rencana Strategis') }}</li>
            <li>{{ HTML::linkRoute('tapkin.index', 'Penetapan Kinerja') }}</li>
            <li>{{ HTML::linkRoute('rkt.index', 'Rencana Kegiatan Tahunan') }}</li>
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