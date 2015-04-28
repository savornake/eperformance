
{{-- Modal dialog section --}}
<div class="modal fade" id="indikatorModalEdit" tabindex="-1" role="dialog" aria-labelledby="indikatorModalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="indikatorModalEditLabel">Edit Indikator</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('method' => 'PUT', 'url' => 'renstras', 'id' => 'form-indikator-edit')) }}

        <div class="form-group">
          {{ Form::label('indikator_kinerja', 'Indikator Kinerja') }}
          {{ Form::textarea('indikator_kinerja', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        <div class="form-group has-feedback">
          {{ Form::label('target', 'Target', ['class' => '']) }}
          {{ Form::text('target', null, array('class' => 'form-control')) }} 
        </div>

        <div class="form-group">
          {{ Form::label('waktu', 'Waktu') }}
          {{ Form::select('waktu', [
            1 => 'Triwulan 1',
            2 => 'Triwulan 2',
            3 => 'Triwulan 3',
            4 => 'Triwulan 4'

          ], null, ['class' => 'form-control']) }}
        </div>

         <div class="form-group">
          {{ Form::label('kegiatan', 'Kegiatan') }}
          {{ Form::textarea('kegiatan', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary', 'id' => 'btn-update-indikator')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}