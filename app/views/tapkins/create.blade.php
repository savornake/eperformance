@extends('layout.main')

@section('content')

<h3>Tambah Tapkin</h3>

<!-- if there are creation errors, they will show here -->


    <div class="form-group">
        {{ Form::label('sasaran', 'Sasaran Strategis') }}
        <select class="form-control" id="sasaran">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div>

    <div class="form-group">

        {{ Form::label('indikator', 'Indikator Kinerja') }}
        <textarea class="form-control" rows="3" id="indikator"></textarea>
    </div>

    <div class="form-group">
        {{ Form::label('target', 'Target') }}
        <textarea class="form-control" rows="1" id="target"></textarea>

    </div>

    <div class="form-group">

        {{ Form::label('waktu', 'Waktu Penyelesaian') }}
        <select class="form-control" id="target">
          <option>Triwulan 1</option>
          <option>Triwulan 2</option>
          <option>Triwulan 3</option>
          <option>Triwulan 4</option>
        </select>    
    </div>
    <div class="form-group">

        {{ Form::label('keterangan', 'Keterangan') }}
        <textarea class="form-control" rows="3" id="keterangan"></textarea>
    </div>



</div>
    





@stop
