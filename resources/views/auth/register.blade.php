@extends('templates.layout')
<<<<<<< HEAD

@section('title') Login @stop

@section('content')
	
	<div style="margin: 5% 30%;">
		
	
		<form action="{{ action('UsersController@storeUser') }}" method="POST" role="form" accept-charset="UTF-8">
			<legend>Register</legend>
			
			<input type="hidden" value="{!! csrf_token() !!}" name="_token">

			<div class="form-group">
				<label for="">Username</label>
				<input name="username" type="text" class="form-control" id="" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Password">
			</div>

			<div class="form-group">
				<label for="">Password Conf</label>
				<input name="confirm_password" type="password" class="form-control" id="" placeholder="Enter Password Again">
			</div>			
		
			<button type="submit" class="btn btn-primary">Submit</button>

		</form>

=======

@section('title') Login @stop

@section('content')
	


	<div style="margin: 5% 30%;">
		
		@include('templates.partials.alerts')
	
		<form action="{{ action('UsersController@storeUser') }}" method="POST" role="form" accept-charset="UTF-8">
			<legend>Registration</legend>
			
			<input type="hidden" value="{!! csrf_token() !!}" name="_token">

			<div class="form-group">
				<label for="">Username</label>
				<input name="username" type="text" class="form-control" id="" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Password">
			</div>

			<div class="form-group">
				<label for="">Password Confirmation</label>
				<input name="password_confirmation" type="password" class="form-control" id="" placeholder="Enter Password Again">
			</div>			
		
			<button type="submit" class="btn btn-danger">Register</button>

		</form>

>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
	</div>
@stop