@extends('layout.main')

@section('content')

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($renstra, array('route' => array('renstras.update', $renstra->id), 'method' => 'PUT')) }}

   <div class="form-group">
        {{ Form::textarea('rencana_strategis', null, array('class' => 'summernote')) }}
    </div>

    <div class="form-group">
        {{ Form::textarea('rencana_kegiatan', null, array('class' => 'summernote')) }}
    </div>

     <div class="form-group">
        {{ Form::label('indikator', 'Indikator') }}
        {{ Form::text('indikator', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-groups">
        {{ Form::label('realisasi', 'Realisasi') }}
        {{ Form::text('realisasi', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('uraian', 'Uraian') }}
        <!-- <div class="summernote"></div> -->
        {{ Form::textarea('uraian', null, array('class' => 'summernote')) }}
     </div>

    {{ Form::submit('Edit Renstra!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@section('script')
<script type="text/javascript">
	
$(document).ready(function() {
  $('.summernote').summernote({height:70, width:770});
});

</script>


@stop