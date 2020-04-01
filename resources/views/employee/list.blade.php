@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="col-md-12">
			<div class="card-header">List of employees</div>
			<div class="card-body">
				<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Phone</th>
					</tr>
				</thead>
				<tbody>
				@foreach($employees as $emp)
					<tr>
						<td>{{ $emp->id }}</td>
						<td>{{ $emp->firstname }}</td>
						<td>{{ $emp->lastname }}</td>
						<td>{{ $emp->email }}</td>
						<td>{{ $emp->phone }}</td>
					</tr>
				@endforeach
				</tbody>
				</table>
				{{ $employees->links() }}
			</div>
		</div>
	</div>
@endsection