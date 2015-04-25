@extends('layout.main')

@section('content')

<h3 align="center"> Rencana Strategis </h3>

<div class="content">
	<div class="row title">

		<!--<div class="col-sm-6"><h3><u>Rencana Strategis</u></h3></div> -->


		<div class="col-sm-12">
			{{-- HTML::linkRoute('renstras.create','Tambah',[], array('class' => 'btn btn-info pull-right')) --}}
      <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah Renstra </button>
		</div>
	</div>


<table class="table table-bordered">
  <tr>
    <th> No. </th>
    <th>Tujuan</th>
  	<th>Sasaran Strategis</th>
  	<th>Indikator Kinerja</th>
  	<th>Program Kegiatan</th>
  	<th>Sub Kegiatan</th>
  	<th>Edit</th>
  </tr>

        <?php $i = 1; ?>
        @foreach ($renstras as $renstra)

  <tr>
  	<td> {{$i}}</td>
  	<td> {{ $renstra->tujuan }}</td>
  	<td> {{ $renstra->sasaran_strategis }} </td>
  	<td> {{ $renstra->indikator }} </td>
  	<td> {{ $renstra->program_kegiatan }} </td>
  	<td> {{ $renstra->sub_kegiatan }}</td>

  	<td> <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
          <a class="btn btn-xs btn-warning btn-block" href="{{ URL::to('renstras/' . $renstra->id . '/edit') }}">Edit</a>
  	<!-- <button type="button" class="btn btn-danger btn btn-primary btn-sm btn-block"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> -->

    <!-- delete button (uses the destroy method DESTROY /nerds/{id} -->
          {{ Form::open(array('url' => 'renstras/' . $renstra->id, 'class' => 'pull-right')) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Hapus', array('class' => 'btn btn-xs btn-danger btn-block')) }}
          {{ Form::close() }}
     </td> 
  </tr>
    <?php $i++; ?>

		@endforeach

</table>

</div>


<!-- Modal Tambah -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Renstra</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'renstras')) }}

    <div class="form-group">
        {{ Form::label('tujuan', 'Tujuan') }}
        {{ Form::textarea('tujuan', null, array('class' => 'summernote')) }}
    </div>

    <div class="form-group">
        {{ Form::label('sasaran_strategis', 'Sasaran Strategis') }}
        {{ Form::textarea('sasaran_strategis', null, array('class' => 'summernote')) }}
    </div>

     <div class="form-group">
        {{ Form::label('indikator', 'Indikator') }}
        {{ Form::textarea('indikator', null, array('class' => 'summernote')) }}
    </div>

     <div class="form-groups">
        {{ Form::label('program_kegiatan', 'Program Kegiatan') }}
        {{ Form::textarea('program_kegiatan', null, array('class' => 'summernote')) }}
    </div>

    <div class="form-group">
        {{ Form::label('sub_kegiatan', 'Sub Kegiatan') }}
        <!-- <div class="summernote"></div> -->
        {{ Form::textarea('sub_kegiatan', null, array('class' => 'summernote')) }}
     </div>

    

    {{ Form::submit('Tambah Renstra', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--         <button type="button" class="btn btn-primary">Save changes</button>
 -->      </div>
    </div>
  </div>

  <script type="text/javascript">
  
$(document).ready(function() {
  $('.summernote').summernote({height:50, width:536});
});

</script>
</div>



@stop

@section('script')


@stop