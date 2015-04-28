
{{-- Modal dialog section --}}
<div class="modal fade" id="indikatorModalAdd" tabindex="-1" role="dialog" aria-labelledby="indikatorModalAddLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="indikatorModalAddLabel">Tambah Indikator</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'renstras', 'id' => 'form-indikator-add')) }}

        <div class="form-group">
          {{ Form::label('indikator_kinerja', 'Indikator Kinerja') }}
          {{ Form::textarea('indikator_kinerja', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

         <div class="form-group">
          {{ Form::label('kegiatan', 'Kegiatan') }}
          {{ Form::textarea('kegiatan', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary', 'id' => 'btn-save-indikator')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}