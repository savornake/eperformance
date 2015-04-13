@extends('layout.main')

@section('content')

<div class="content">
	{{HTML::linkRoute('sasaran.create', 'Add', [], ['class' => 'btn btn-primary'])}}
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
