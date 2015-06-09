@extends('templates.layout')

@section('title') Login @stop

@section('content')
	
	<div style="margin: 5% 30%;">
		
	
		<form action="{{ action('UsersController@authUser') }}" method="POST" role="form">
			<legend>Login</legend>
		
<<<<<<< HEAD
=======
			<input type="hidden" value="{!! csrf_token() !!}" name="_token">

>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Password">
			</div>
		
<<<<<<< HEAD
			<button type="submit" class="btn btn-primary">Login</button>
			<a type="button" class="btn btn-success" href="{{ action('UsersController@registrationPage') }}">Registration</a>
=======
			<button type="submit" class="btn btn-default" id="loginButton">Login</button>
			<a type="button" class="btn btn-danger" href="{{ action('UsersController@registrationPage') }}">Registration</a>
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
		</form>

	</div>
@stop