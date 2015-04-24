@extends('layout.main')

@section('content')

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($renstra, array('route' => array('renstras.update', $renstra->id), 'method' => 'PUT')) }}

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