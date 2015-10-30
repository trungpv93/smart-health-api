@extends ("layouts.masters")

@section ("title")
	Register
@endsection

@section ("content")
	<form action="/register" method="POST" role="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="txtName" placeholder="Name" name="name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="txtEmail" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="txtPassword" placeholder="Password" name="password">
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Password</label>
			<input type="password" class="form-control" id="txtConfirmPassword" placeholder="Confirm Password" name="password_confirmation">
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
@endsection