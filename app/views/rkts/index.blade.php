@extends('layout.main')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h2>Rencana Kegiatan Tahunan</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		{{ Form::select('filter-biro', $list_biro, null, ['class' => 'form-control']) }}
	</div>
	<div class="col-sm-6">
		<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#modalRkt"> Tambah RKT </button>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Sasaran Strategis</th>
					<th>Biro</th>
					<th>Indikator Kinerja</th>
					<th>Target Kinerja</th>
					<th>Waktu</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
				<tr>
					<td>Biro</td>
					<td>Sasaran Strategis</td>
					<td>Indikator Kinerja</td>
					<td>Target Kinerja</td>
					<td>Waktu</td>
					<td>Action</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="modalRkt" tabindex="-1" role="dialog" aria-labelledby="modalRktLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modalRktLabel">Tambah RKT</h4>
			</div>

			<div class="modal-body">
				{{ Form::open(array('route' => 'rkt.store')) }}

				<div class="form-group">
					{{ Form::label('sasaran', 'Sasaran Strategis') }}
					{{ Form::select('sasaran_id', $list_sasaran, null, ['class' => 'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::label('biro', 'Biro') }}
					{{ Form::select('biro_id', $list_biro, null, ['class' => 'form-control']) }}
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
					), null, ['class' => 'form-control']) }}
					
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
@stop