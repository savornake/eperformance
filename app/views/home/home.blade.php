
@extends('layout/main')
@section('content')


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <div class="container marketing">


      <!-- Three columns of text below the carousel -->
      <div class="row text-center">
        <div class="col-md-4">
          <img class="img-circle" src="img/ombudsman1.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h3>Rencana Strategis</h3>
          <p>detail Renstra atau Rencana Strategis</p>
          <p><a class="btn btn-default" {{HTML::linkRoute('renstras.index','Detail Renstra')}} </a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h3>Penetapan Kinerja</h3>
          <p> Penjelasan Menu nomer 2 </p>
          <p><a class="btn btn-default" {{HTML::linkRoute('penetapan-kinerja.index','Detail Tapkin')}} </a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h3>Rencana Kegiatan Tahunan</h3>
          <p>Penjelasan Menu</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

         <div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h3>Capaian Penetapan Kinerja</h3>
          <p>Penjelasan Menu</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

		<div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h3>Laporan Realisasi Anggaran</h3>
          <p>Penjelasan Menu</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

      	<div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h3>Rencana Penyerapan Anggaran</h3>
          <p>Penjelasan Menu</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div>

@stop