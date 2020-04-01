@extends('layouts.app')
 
@section('content')
<div class="container justify-text-center">
	<div class="col-md-5">
		<h3>Create New</h3><hr>
		<form action="{{ url('employee')}}" method="POST">
			@csrf
			<label for="firstname">firstname</label>
			<input type="text" name="firstname" id="firstname" class="form-control"><br>
			<label for="lastname">lastname</label>
			<input type="text" name="lastname" id="lastname" class="form-control"><br>
			<label for="email">email</label>
			<input type="email" name="email" id="email" class="form-control"><br>
			<label for="phone">phone</label>
			<input type="text" name="phone" id="phone" class="form-control"><br>
			<input type="submit" value="Submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection