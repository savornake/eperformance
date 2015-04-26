@extends('layout.main')

{{-- List external css section --}}
@section('styles')
  {{HTML::style('css/easyui/default/easyui.css')}}
  {{HTML::style('css/easyui/icon.css')}}
@stop

{{-- List library javascript section --}}
@section('scripts')
  {{ HTML::script('js/easyui/jquery.easyui.min.js') }}
  {{ HTML::script('js/jquery.autogrow-textarea.js') }}
@stop

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h2> Rencana Strategis </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="btn-group">
        <button type="button" class="btn btn-default" id="renstra-add">
          <span class="glyphicon glyphicon-plus" arie-hidden="true"></span> Add
        </button>
        <button type="button" class="btn btn-warning disabled" id="renstra-edit">
          <span class="glyphicon glyphicon-pencil" arie-hidden="true"></span> Edit
        </button>
        <button type="button" class="btn btn-danger disabled" id="renstra-delete">
          <span class="glyphicon glyphicon-minus" arie-hidden="true"></span> Delete
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <table id="renstra-table"></table>
    </div>
  </div>

  @include('renstras.renstra-modal-add')
  @include('renstras.renstra-modal-edit')
  @include('renstras.renstra-modal-delete')

@stop



{{-- In document script --}}
@section('script')
<script type="text/javascript">

  var selectedId;

  $(function() {});

  $('textarea').css('overflow', 'hidden').autogrow();

  $('#form-renstra-add, #form-renstra-edit, #form-renstra-delete').click(function() {
    return false;
  });

  /**
   * Save form input
   * @param  {[type]}
   * @return {[type]}
   */
  $('#btn-save-renstra').click(function() {

    $.post("{{ route('renstra.store') }}", $('#form-renstra-add').serialize(), function(resp) {
      console.log(resp);
      if(resp.status == 'success') {
        $('#renstraModalAdd').modal('hide');
        $('#renstra-table').datagrid('reload');
      }
    });
  });

  $('#btn-update-renstra').click(function() {

    //console.log("{{ url('/') }}/renstra/"+selectedId);

    $.post("{{ url('/') }}/renstra/"+selectedId, $('#form-renstra-edit').serialize(), function(resp) {
      if(resp.status == 'success') {
        $('#renstraModalEdit').modal('hide');
        $('#renstra-table').datagrid('reload');
      }
    });
  });

  $('#btn-delete-renstra').click(function() {

    $.post("{{ url('/') }}/renstra/"+selectedId, $('#form-renstra-delete').serialize(), function(resp) {
      if(resp.status == 'success') {
        $('#renstraModalDelete').modal('hide');
        $('#renstra-table').datagrid('reload');
      }
    });
  });

  $('#renstra-table').datagrid({
    url: "{{ URL::route('renstra.json') }}",
    columns:[[
      {field:'sasaran',title:'Sasaran'},
      {field:'tujuan',title:'Tujuan'}
    ]],
    idField: 'id',  
    fitColumns: true,
    rownumbers: true,
    singleSelect: true,
    pagination: true,
    striped: true,
    onSelect: function(index, row) {
      /*console.log(index);
      console.log(row);*/
      selectedId = row.id;
      $('#renstra-edit, #renstra-delete').removeClass('disabled');
    }
  });

  /**
   * Button renstra in action
   */
  $('#renstra-add').click(function() {

    $('#renstraModalAdd').modal({
      backdrop: 'static'
    });
  });

  $('#renstra-edit').click(function() {

    var selectedRow = $('#renstra-table').datagrid('getSelected');
    $('#form-renstra-edit #tujuan').val(selectedRow.tujuan);
    $('#form-renstra-edit #sasaran').val(selectedRow.sasaran);

    $('#renstraModalEdit').modal({
      backdrop: 'static'
    });
  });

  $('#renstra-delete').click(function() {
    $('#renstraModalDelete').modal({
      backdrop: 'static'
    });
  });
</script>
@stop