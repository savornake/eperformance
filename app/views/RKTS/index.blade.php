@extends('layout.main')

@section('content')

<div class="content">
<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah RKT </button>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah RKT</h4>
				</div>

				<div class="modal-body">
					{{ Form::open(array('route' => 'RKTS.store')) }}

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




	<div class="content">
		<div class="col-sm-12">
			<table class="table table-striped">

				<thead>
					<tr>
						<th >Sasaran Strategis</th>
						<th>Indikator Kinerja</th>
						<th colspan="2">Target Kinerja</th>
						<th>Edit</th>
					</tr>
				</thead>

					<tr>
						<td>tes sasaran</td>
						<td>tes indikator</td>
						<td>80%</td>
						<td>triwulan 1</td>
						<td>edit</td>	

<tbody>
				
				</tbody>
			</table>
		</div>
	</div>
</div>


@stop