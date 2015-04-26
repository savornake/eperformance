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
      <h2> Rencana Kegiatan Tahunan </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="btn-group">
        <button type="button" class="btn btn-default" id="rkt-add">
          <span class="glyphicon glyphicon-plus" arie-hidden="true"></span> Add
        </button>
        <button type="button" class="btn btn-warning disabled" id="rkt-edit">
          <span class="glyphicon glyphicon-pencil" arie-hidden="true"></span> Edit
        </button>
        <button type="button" class="btn btn-danger disabled" id="rkt-delete">
          <span class="glyphicon glyphicon-minus" arie-hidden="true"></span> Delete
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <table id="rkt-table"></table>
    </div>
  </div>

  @include('rkts.modal-add')
  @include('rkts.modal-edit')
  @include('rkts.modal-delete')

@stop



{{-- In document script --}}
@section('script')
<script type="text/javascript">
	var selectedId;
	$('textarea').css('overflow', 'hidden').autogrow();
	$('#form-rkt-add, #form-rkt-edit, #form-rkt-delete').click(function() {
		return false;
	});

	$('#btn-save-rkt').click(function() {
		$.post("{{ route('rkt.store') }}", $('#form-rkt-add').serialize(), function(resp) {
			//console.log(resp);
			if(resp.status == 'success') {
				$('#rktModalAdd').modal('hide');
				$('#rkt-table').datagrid('reload');
			}
		});
	});

	$('#btn-update-rkt').click(function() {
		$.post("{{ url('/') }}/rkt/"+selectedId, $('#form-rkt-edit').serialize(), function(resp) {
			if(resp.status == 'success') {
				$('#rktModalEdit').modal('hide');
				$('#rkt-table').datagrid('reload');
			}
		});
	});

	$('#btn-delete-rkt').click(function() {

		$.post("{{ url('/') }}/rkt/"+selectedId, $('#form-rkt-delete').serialize(), function(resp) {
			if(resp.status == 'success') {
				$('#rktModalDelete').modal('hide');
				$('#rkt-table').datagrid('reload');
			}
		});
	});

	$('#rkt-table').datagrid({
		url: "{{ URL::route('rkt.json') }}",
		columns:[[
			{field:'biro-nama',title:'Biro'},
			{field:'sasaran',title:'Sasaran'}
		]],
		idField: 'id',  
		fitColumns: true,
		rownumbers: true,
		singleSelect: true,
		pagination: true,
		striped: true,
		onSelect: function(index, row) {
			selectedId = row.id;
			$('#rkt-edit, #rkt-delete').removeClass('disabled');
		}
	});

	$('#rkt-add').click(function() {
		$('#rktModalAdd').modal({
			backdrop: 'static'
		});
	});

	
	$('#rkt-edit').click(function() {

		var selectedRow = $('#rkt-table').datagrid('getSelected');
		$('#form-rkt-edit #biro_id').val(selectedRow.biro_id);
		$('#form-rkt-edit #sasaran').val(selectedRow.sasaran);

		$('#rktModalEdit').modal({
			backdrop: 'static'
		});
	});

	$('#rkt-delete').click(function() {
		$('#rktModalDelete').modal({
			backdrop: 'static'
		});
	});

</script>
@stop