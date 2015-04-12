@extends('layout.main')

@section('content')

<h3>Tambah Sasaran Strategis</h3>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tapkins')) }}

    <div class="form-group">
        {{ Form::textarea('sasaran_strategis', null, array('class' => 'summernote')) }}
    </div>


    {{ Form::submit('Tambah Sasaran Strategis', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

@section('script')
<script type="text/javascript">
	
$(document).ready(function() {
  $('.summernote').summernote({height:70, width:770});
});

</script>


@stop