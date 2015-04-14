@extends('layout.main')

@section('content')
<div class="content">

<!-- <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah Tapkin </button>
 -->

 {{-- HTML::linkRoute('tapkins.create','Tambah',[], array('class' => 'btn btn-info pull-right')) --}}
      <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah Tapkin </button>

<!-- modal popup
 --><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Tapkin</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('route' => 'penetapan-kinerja.store')) }}

         <div class="form-group">
        {{ Form::label('sasaran', 'Sasaran Strategis') }}
        {{ Form::select('sasaran_id', $list_sasaran) }}

    </div>

    <div class="form-group">

        {{ Form::label('indikator', 'Indikator Kinerja') }}
        <textarea class="form-control" rows="3" id="indikator" name="indikator_kinerja"></textarea>
    </div>

    <div class="form-group">
        {{ Form::label('target', 'Target') }}
        <textarea class="form-control" rows="1" id="target" name="target"></textarea>

    </div>

    <div class="form-group">

        {{ Form::label('waktu', 'Waktu Penyelesaian') }}
        <select class="form-control" id="waktu" name="waktu_penyelesaian">
          <option>Triwulan 1</option>
          <option>Triwulan 2</option>
          <option>Triwulan 3</option>
          <option>Triwulan 4</option>
        </select>    
    </div>
    <div class="form-group">

        {{ Form::label('keterangan', 'Keterangan') }}
        <textarea class="form-control" rows="3" id="keterangan" name="keterangan"></textarea>

{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}

    {{Form::close()}}

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    


<table class="table table-striped">
  <tr>
    <th> No. </th>  
    <th>Sasaran Strategis</th>
    <th> No. </th>  
    <th>Indikator Kinerja</th>
    <th>Target</th>
    <th>Waktu Penyelesaian</th>
    <th>Keterangan</th>
  </tr>


{{--   <tr>
    <td> 1</td>
    <td> tes sasaran strategis</td>
    <td>  1</td>
    <td> tes indikator kinerja</td>
    <td> 80% </td>
    <td> triwulan 1 </td>
    <td> tes keterangan</td>
</tr>

<tr>
  <td colspan="2"> </td>
  <td>  2</td>
  <td> tes indikator kinerja</td>
  <td> 80% </td>
  <td> triwulan 1 </td>
  <td> tes keterangan</td>
</tr> --}}

  @foreach($sasaran as $item)
  
    <tr>
      <td colspan="2"> </td>
      <td> {{$item->sasaran}}</td>
     {{--  <td> tes indikator kinerja</td>
      <td> 80% </td>
      <td> triwulan 1 </td>
      <td> tes keterangan</td> --}}
    </tr>
  @endforeach
</table>
</div>
  @stop
