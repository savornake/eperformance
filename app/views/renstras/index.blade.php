@extends('layout.main')

@section('content')

<div class="content">
	<div class="row title">
		<div class="col-sm-6"><h3><u>Menu Renstra</u></h3></div>
		<div class="col-sm-6">
			{{HTML::linkRoute('renstras.create','Tambah',[], array('class' => 'btn btn-info pull-right'))}}
		</div>

	</div>


<table class="table table-bordered">
  <tr>
	<th> No. </th>  
  	<th>Rencana Strategis</th>
  	<th>Rencana Kegiatan</th>
  	<th>Indikator Kinerja</th>
  	<th>Realisasi</th>
  	<th>Presentase</th>
  	<th>Uraian Realisasi</th>
  	<th>Edit</th>

  </tr>


        @foreach ($renstras as $renstra)

  <tr>
  	<td>1</td>
  	<td> {{ $renstra->rencana_strategis }}I</td>
  	<td> {{ $renstra->rencana_kegiatan }} </td>
  	<td> {{ $renstra->indikator }} </td>
  	<td> {{ $renstra->realisasi }} </td>
  	<td> {{ $renstra->realisasi / $renstra->indikator*100 }} % </td>
  	<td> {{ $renstra->uraian }} </td>
  	<td> <!-- tombol edit --><button type="button" class="btn btn-warning btn btn-primary btn-sm btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
  	<button type="button" class="btn btn-danger btn btn-primary btn-sm btn-block"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> </td> 
			
  </tr>

		@endforeach

</table>

</div>

@stop
