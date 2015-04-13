@extends('layout.main')

@section('content')
<div class="content">

<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> Tambah Tapkin </button>

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


  <tr>
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
</tr>
</table>
</div>
  @stop
