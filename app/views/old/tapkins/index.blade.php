@extends('layout.main')

@section('content')

<h3 align="center"> Penetapan Kinerja </h3>

<div class="content">

<a class="btn btn-primary btn-sm" {{HTML::linkRoute('sasaran.index','Tambah Sasaran Strategis')}} </a>

	<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah Tapkin </button>


	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Tapkin</h4>
				</div>

				<div class="modal-body">
					{{ Form::open(array('route' => 'penetapan-kinerja.store')) }}

					<div class="form-group">
						{{ Form::label('sasaran', 'Sasaran Strategis') }}
						{{ Form::select('sasaran_id', $list_sasaran) }}
					</div>

					<div class="form-group">
						{{ Form::label('indikator', 'Indikator Kinerja') }}
						<textarea class="form-control" rows="3" id="indikator" name="indikator_kinerja"></textarea>
					</div>

					<div class="form-group">
						{{ Form::label('target', 'Target') }}
						<textarea class="form-control" rows="1" id="target" name="target"></textarea>
					</div>

					<div class="form-group">
						{{ Form::label('waktu', 'Waktu Penyelesaian') }}
						{{ Form::select('waktu_penyelesaian', array(
							1 => 'Triwulan 1',
							2 => 'Triwulan 2',
							3 => 'Triwulan 3',
							4 => 'Triwulan 4',

						)) }}
						{{-- <select class="form-control" id="waktu" name="waktu_penyelesaian">
							<option>Triwulan 1</option>
							<option>Triwulan 2</option>
							<option>Triwulan 3</option>
							<option>Triwulan 4</option>
						</select>    --}} 
					</div>

					<div class="form-group">
						{{ Form::label('keterangan', 'Keterangan') }}
						<textarea class="form-control" rows="3" id="keterangan" name="keterangan"></textarea>
					</div>

					{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
					{{ Form::close()}}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped">

				<thead>
					<tr>
						<th>Sasaran Strategis</th>
						<th>Indikator Kinerja</th>
						<th>Target</th>
						<th>Waktu Penyelesaian</th>
						<th>Keterangan</th>
						<th>Edit</th>
					</tr>
				</thead>

				<tbody>
				@foreach($sasarans as $sasaran)

					@if(count($sasaran->indikator) >= 1)
					<tr>
						<td rowspan="{{count($sasaran->indikator)}}">{{$sasaran->sasaran}}</td>
						<td>{{$sasaran->indikator[0]->indikator_kinerja}}</td>
						<td>{{$sasaran->indikator[0]->target}}</td>
						<td>Triwulan {{$sasaran->indikator[0]->waktu_penyelesaian}}</td>
						<td>{{$sasaran->indikator[0]->keterangan}}</td>
						<td>{{ HTML::linkRoute('penetapan-kinerja.edit', 'Edit') }}</td>
					</tr>
					@endif

					@for($i=1; $i < count($sasaran->indikator); $i++)   
					<tr>
						<td>{{$sasaran->indikator[$i]->indikator_kinerja}}</td>
						<td>{{$sasaran->indikator[$i]->target}}</td>
						<td>Triwulan {{$sasaran->indikator[$i]->waktu_penyelesaian}}</td>
						<td>{{$sasaran->indikator[$i]->keterangan}}</td>
						<td>{{ HTML::linkRoute('penetapan-kinerja.edit', 'Edit') }}</td>

					</tr>
					@endfor

				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop
