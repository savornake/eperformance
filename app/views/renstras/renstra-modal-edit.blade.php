
{{-- Modal dialog section --}}
<div class="modal fade" id="renstraModalEdit" tabindex="-1" role="dialog" aria-labelledby="renstraModalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="renstraModalEditLabel">Edit Renstra</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('method' => 'PUT', 'route' => 'renstra.update', 'id' => 'form-renstra-edit')) }}

        <div class="form-group">
          {{ Form::label('tujuan', 'Tujuan') }}
          {{ Form::textarea('tujuan', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        <div class="form-group">
          {{ Form::label('sasaran', 'Sasaran Strategis') }}
          {{ Form::textarea('sasaran', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary', 'id' => 'btn-update-renstra')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}