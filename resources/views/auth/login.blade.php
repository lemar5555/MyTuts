@extends('templates.layout')

@section('title') Login @stop

@section('content')
	
	<div style="margin: 5% 30%;">
		
	@include('templates.partials.alerts')
	
		<form action="{{ action('UsersController@authUser') }}" method="POST" role="form">
			<legend>Login</legend>
		
			<input type="hidden" value="{!! csrf_token() !!}" name="_token">

			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Password">
			</div>
			<div class="checkbox" style="float: right;">
				<label>
					<input name="remember" type="checkbox" value="1">
					Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default" id="loginButton">Login</button>
			<a type="button" class="btn btn-danger" href="{{ action('UsersController@registrationPage') }}">Registration</a>

		</form>

	</div>
@stop