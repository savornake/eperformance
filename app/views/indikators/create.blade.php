@extends('layout.main')

@section('content')

<h3>Tambah Indikator Kinerja</h3>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('route' => 'tapkins.indikators.store')) }}

    <div class="form-group">
        {{ Form::textarea('indikator_kinerja', null, array('class' => 'summernote')) }}
    </div>

     <div class="form-groups">
        {{ Form::label('target', 'Target') }}
        {{ Form::text('target', null, array('class' => 'form-control')) }}

    </div>

	<div class="form-groups">
	        {{ Form::label('waktu_penyelesaian', 'Waktu Penyelesaian') }}
	        {{ Form::select('waktu_penyelesaian', array('1' => 'Triwulan 1', '2'=>'Triwulan 2', '3'=>'Triwulan 3', '4'=>'Triwulan4'), '1',  array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
	        {{ Form::label('keterangan', 'Keterangan') }}

        {{ Form::textarea('keterangan', null, array('class' => 'summernote')) }}
    </div>


    {{ Form::submit('Tambah Indikator Kinerja', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@section('script')
<script type="text/javascript">
	
$(document).ready(function() {
  $('.summernote').summernote({height:70, width:770});
});

</script>


@stop