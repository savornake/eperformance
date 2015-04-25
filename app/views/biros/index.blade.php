@extends('layout.main')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h2>Biro</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
				@foreach($biros as $biro)
				<tr>
					<td>{{ $biro->name }}</td>
					<td>{{ $biro->description }}</td>
					<td>
						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		{{$biros->links()}}
	</div>
</div>
@stop