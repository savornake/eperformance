
{{-- Modal dialog section --}}
<div class="modal fade" id="renstraModalAdd" tabindex="-1" role="dialog" aria-labelledby="renstraModalAddLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="renstraModalAddLabel">Tambah Renstra</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'renstras', 'id' => 'form-renstra-add')) }}

        <div class="form-group">
          {{ Form::label('tujuan', 'Tujuan') }}
          {{ Form::textarea('tujuan', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        <div class="form-group">
          {{ Form::label('sasaran', 'Sasaran Strategis') }}
          {{ Form::textarea('sasaran', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary', 'id' => 'btn-save-renstra')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}