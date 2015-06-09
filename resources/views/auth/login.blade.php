@extends('templates.layout')

@section('title') Login @stop

@section('content')
	
	<div style="margin: 5% 30%;">
		
	
		<form action="{{ action('UsersController@authUser') }}" method="POST" role="form">
			<legend>Login</legend>
		
			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Password">
			</div>
		
			<button type="submit" class="btn btn-primary">Login</button>
			<a type="button" class="btn btn-success" href="{{ action('UsersController@registrationPage') }}">Registration</a>
		</form>

	</div>
@stop