
{{-- Modal dialog section --}}
<div class="modal fade" id="tapkinModalDelete" tabindex="-1" role="dialog" aria-labelledby="tapkinModalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="tapkinModalDeleteLabel">Hapus Tapkin</h4>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus item ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        {{ Form::open(array(
          'url' => 'tapkin/123', 
          'method' => 'DELETE', 
          'id' => 'form-tapkin-delete', 
          'class' => 'pull-right')) }}

          {{ Form::submit('Ya', array(
            'class' => 'btn btn-danger', 
            'id' => 'btn-delete-tapkin')) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}