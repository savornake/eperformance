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
  @include('rkts.modal-indikator-add')
  @include('rkts.modal-indikator-edit')
  @include('rkts.modal-indikator-delete')

@stop



{{-- In document script --}}
@section('script')
<script type="text/javascript">
	var selectedId, selectedChildId;
	$('textarea').css('overflow', 'hidden').autogrow();
	$('#form-rkt-add, #form-rkt-edit, #form-rkt-delete, #form-indikator-add, #form-indikator-edit, #form-indikator-delete').click(function() {
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

	$('#btn-save-indikator').click(function() {
	$.post("{{ url('rkt') }}/"+selectedId+"/indikator", $('#form-indikator-add').serialize(), function(resp) {
	  console.log(resp);
	  if(resp.status == 'success') {
	    $('#indikatorModalAdd').modal('hide');
	    $('#rkt-table').datagrid('reload');
	  }
	});
	});

	$('#btn-update-indikator').click(function() {

	//console.log("{{ url('/') }}/rkt/"+selectedId);

	$.post("{{ url('rkt') }}/"+selectedId+"/indikator/"+selectedChildId, $('#form-indikator-edit').serialize(), function(resp) {
	  if(resp.status == 'success') {
	    $('#indikatorModalEdit').modal('hide');
	    $('#rkt-table').datagrid('reload');
	  }
	});
	});

	$('#btn-delete-indikator').click(function() {

	$.post("{{ url('rkt') }}/"+selectedId+"/indikator/"+selectedChildId, $('#form-indikator-delete').serialize(), function(resp) {
	  if(resp.status == 'success') {
	    $('#indikatorModalDelete').modal('hide');
	    $('#rkt-table').datagrid('reload');
	  }
	});
	});

	$('#rkt-table').datagrid({
		url: "{{ URL::route('rkt.json') }}",
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
			$('#rkt-edit, #rkt-delete').removeClass('disabled');
		},
		onExpandRow: function(index,row) {
		  var indikator = $(this).datagrid('getRowDetail', index).find('table.indikator-table');
		  
		  indikator.datagrid({
		    url: "{{ url('rkt') }}/"+row.id+"/indikator",
		    columns: [[
		      {field:'indikator_kinerja', title: 'Indikator', width: 700},
		      {field:'target', title: 'Target', width: 700},
		      {field:'waktu', title: 'Waktu (Triwulan)', width: 700},
		      {field:'kegiatan', title: 'Kegiatan', width: 700}
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
		      $('#rkt-table').datagrid('fixDetailRowHeight',index);
		    },
		    onLoadSuccess:function(){
		      setTimeout(function(){
		        $('#rkt-table').datagrid('fixDetailRowHeight',index);
		      }, 0);
		    },
		    onSelect: function(index, row) {
		      selectedChildId = row.id;
		      //$('#rkt-edit, #rkt-delete').removeClass('disabled');
		    },
		  });

		  $('#rkt-table').datagrid('fixDetailRowHeight',index);
		},
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