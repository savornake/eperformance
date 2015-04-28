@extends('layout.main')

{{-- List external css section --}}
@section('styles')
  {{HTML::style('css/easyui/default/easyui.css')}}
  {{HTML::style('css/easyui/icon.css')}}
@stop

{{-- List library javascript section --}}
@section('scripts')
  {{ HTML::script('js/easyui/jquery.easyui.min.js') }}
  {{ HTML::script('js/easyui/datagrid-detailview.js') }}
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
  @include('tapkins.modal-indikator-add')
  @include('tapkins.modal-indikator-edit')
  @include('tapkins.modal-indikator-delete')

@stop



{{-- In document script --}}
@section('script')
<script type="text/javascript">
	var selectedId, selectedChildId;
	$('textarea').css('overflow', 'hidden').autogrow();
	$('#form-tapkin-add, #form-tapkin-edit, #form-tapkin-delete, #form-indikator-add, #form-indikator-edit, #form-indikator-delete').click(function() {
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

	$('#btn-update-tapkin').click(function() {
		$.post("{{ url('/') }}/tapkin/"+selectedId, $('#form-tapkin-edit').serialize(), function(resp) {
			if(resp.status == 'success') {
				$('#tapkinModalEdit').modal('hide');
				$('#tapkin-table').datagrid('reload');
			}
		});
	});

	$('#btn-delete-tapkin').click(function() {

		$.post("{{ url('/') }}/tapkin/"+selectedId, $('#form-tapkin-delete').serialize(), function(resp) {
			if(resp.status == 'success') {
				$('#tapkinModalDelete').modal('hide');
				$('#tapkin-table').datagrid('reload');
			}
		});
	});

	
	$('#btn-save-indikator').click(function() {
	$.post("{{ url('tapkin') }}/"+selectedId+"/indikator", $('#form-indikator-add').serialize(), function(resp) {
	  console.log(resp);
	  if(resp.status == 'success') {
	    $('#indikatorModalAdd').modal('hide');
	    $('#tapkin-table').datagrid('reload');
	  }
	});
	});

	$('#btn-update-indikator').click(function() {

	//console.log("{{ url('/') }}/tapkin/"+selectedId);

	$.post("{{ url('tapkin') }}/"+selectedId+"/indikator/"+selectedChildId, $('#form-indikator-edit').serialize(), function(resp) {
	  if(resp.status == 'success') {
	    $('#indikatorModalEdit').modal('hide');
	    $('#tapkin-table').datagrid('reload');
	  }
	});
	});

	$('#btn-delete-indikator').click(function() {

	$.post("{{ url('tapkin') }}/"+selectedId+"/indikator/"+selectedChildId, $('#form-indikator-delete').serialize(), function(resp) {
	  if(resp.status == 'success') {
	    $('#indikatorModalDelete').modal('hide');
	    $('#tapkin-table').datagrid('reload');
	  }
	});
	});

	$('#tapkin-table').datagrid({
		url: "{{ URL::route('tapkin.json') }}",
		columns:[[
			{field:'biro-nama',title:'Biro', width: 100},
			{field:'sasaran',title:'Sasaran', width: 100}
		]],
		idField: 'id',  
		view: detailview,
		fitColumns: true,
		rownumbers: true,
		singleSelect: true,
		pagination: true,
		striped: true,
		detailFormatter:function(index,row){
			return '<div style="padding:2px;background-color: #CCC;"><table class="indikator-table"></table></div>';
		},
		onSelect: function(index, row) {
			selectedId = row.id;
			$('#tapkin-edit, #tapkin-delete').removeClass('disabled');
		},
		onExpandRow: function(index,row) {
	      var indikator = $(this).datagrid('getRowDetail', index).find('table.indikator-table');
	      
	      indikator.datagrid({
	        url: "{{ url('tapkin') }}/"+row.id+"/indikator",
	        columns: [[
	          {field:'indikator_kinerja', title: 'Indikator', width: 700},
	          {field:'target', title: 'Target', width: 700},
	          {field:'waktu', title: 'Waktu (Triwulan)', width: 700},
	          {field:'keterangan', title: 'Keterangan', width: 700}
	        ]],
	        idField: 'id',
	        method: 'get',
	        fitColumns: true,
	        rownumbers: true,
	        singleSelect: true,
	        striped: true,
	        toolbar: [{
	          iconCls: 'icon-add',
	          text: 'Add',
	          handler: function(){
	            $('#indikatorModalAdd').modal({
	              backdrop: 'static'
	            });

	            selectedId =  row.id;
	          }
	        },{
	          iconCls: 'icon-edit',
	          text: 'Edit',
	          handler: function(){

	            var selectedRow = indikator.datagrid('getSelected');
	            selectedId = row.id;
	            $('#form-indikator-edit #indikator_kinerja').val(selectedRow.indikator_kinerja);
	            $('#form-indikator-edit #target').val(selectedRow.target);
	            $('#form-indikator-edit #waktu').val(selectedRow.waktu);
	            $('#form-indikator-edit #kegiatan').val(selectedRow.kegiatan);

	            $('#indikatorModalEdit').modal({
	              backdrop: 'static'
	            });

	          }
	        },{
	          iconCls: 'icon-remove',
	          text: 'Delete',
	          handler: function(){
	            selectedId = row.id;

	            $('#indikatorModalDelete').modal({
	              backdrop: 'static'
	            });
	          }
	        }],
	        onResize:function(){
	          $('#tapkin-table').datagrid('fixDetailRowHeight',index);
	        },
	        onLoadSuccess:function(){
	          setTimeout(function(){
	            $('#tapkin-table').datagrid('fixDetailRowHeight',index);
	          }, 0);
	        },
	        onSelect: function(index, row) {
	          selectedChildId = row.id;
	          //$('#tapkin-edit, #tapkin-delete').removeClass('disabled');
	        },
	      });

	      $('#tapkin-table').datagrid('fixDetailRowHeight',index);
	    },
	});

	$('#tapkin-add').click(function() {
		$('#tapkinModalAdd').modal({
			backdrop: 'static'
		});
	});

	$('#tapkin-edit').click(function() {

		var selectedRow = $('#tapkin-table').datagrid('getSelected');
		$('#form-tapkin-edit #biro_id').val(selectedRow.biro_id);
		$('#form-tapkin-edit #sasaran').val(selectedRow.sasaran);

		$('#tapkinModalEdit').modal({
			backdrop: 'static'
		});
	});

	$('#tapkin-delete').click(function() {
		$('#tapkinModalDelete').modal({
			backdrop: 'static'
		});
	});

</script>
@stop