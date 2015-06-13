@extends('templates.layout')

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

	</div>
@stop