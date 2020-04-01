@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="col-md-12">
			<div class="card-header">List of Companies</div>
			<div class="card-body">
				<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>Website</th>
					</tr>
				</thead>
				<tbody>
				@foreach($companies as $comp)
					<tr>
						<td>{{ $comp->id }}</td>
						<td>{{ $comp->name }}</td>
						<td>{{ $comp->address }}</td>
						<td>{{ $comp->website }}</td>
					</tr>
				@endforeach
				</tbody>
				</table>
				{{ $companies->links() }}
			</div>
		</div>
	</div>
@endsection