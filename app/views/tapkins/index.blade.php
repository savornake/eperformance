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
      <h2> Penetapan Kinerja </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="btn-group">
        <button type="button" class="btn btn-default" id="tapkin-add">
          <span class="glyphicon glyphicon-plus" arie-hidden="true"></span> Add
        </button>
        <button type="button" class="btn btn-warning disabled" id="tapkin-edit">
          <span class="glyphicon glyphicon-pencil" arie-hidden="true"></span> Edit
        </button>
        <button type="button" class="btn btn-danger disabled" id="tapkin-delete">
          <span class="glyphicon glyphicon-minus" arie-hidden="true"></span> Delete
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <table id="tapkin-table"></table>
    </div>
  </div>

  @include('tapkins.modal-add')
  @include('tapkins.modal-edit')
  @include('tapkins.modal-delete')

@stop



{{-- In document script --}}
@section('script')
<script type="text/javascript">
	var selectedId;
	$('textarea').css('overflow', 'hidden').autogrow();
	$('#form-tapkin-add, #form-tapkin-edit, #form-tapkin-delete').click(function() {
		return false;
	});

	$('#btn-save-tapkin').click(function() {
		$.post("{{ route('tapkin.store') }}", $('#form-tapkin-add').serialize(), function(resp) {
			//console.log(resp);
			if(resp.status == 'success') {
				$('#tapkinModalAdd').modal('hide');
				$('#tapkin-table').datagrid('reload');
			}
		});
	});

	$('#tapkin-table').datagrid({
		url: "{{ URL::route('tapkin.json') }}",
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
			$('#tapkin-edit, #tapkin-delete').removeClass('disabled');
		}
	});

	$('#tapkin-add').click(function() {
		$('#tapkinModalAdd').modal({
			backdrop: 'static'
		});
	});

</script>
@stop