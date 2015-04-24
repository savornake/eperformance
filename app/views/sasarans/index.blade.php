@extends('layout.main')

@section('content')


     <h3 align="center">Tambah Sasaran Kinerja</h3>




<div class="content">

    <a class="btn btn-primary btn-sm" {{HTML::linkRoute('penetapan-kinerja.index','Kembali ke Menu Tapkin')}} </a>
	{{HTML::linkRoute('sasaran.create', 'Add', [], ['class' => 'btn btn-primary pull-right'])}}
	<table class="table table-condensed table-striped">
		<tr>
			<th>Sasaran</th>
			<th>Deskripsi</th>
			<th>Action</th>
		</tr>

		@foreach ($sasarans as $item)
		<tr>
			<td>{{ $item->sasaran }}</td>
			<td>{{ $item->deskripsi }}</td>
			<td>{{ HTML::linkRoute('sasaran.edit', 'Edit', $item->id) }}</td>
		</tr>
		@endforeach
	</table>
</div>
@stop
