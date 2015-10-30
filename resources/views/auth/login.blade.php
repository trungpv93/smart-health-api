@extends ("layouts.masters")

@section ("title")
	Login
@endsection

@section ("content")
	<form action="/login" method="POST" role="form">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="txtEmail" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="txtPassword" placeholder="Password" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
@endsection