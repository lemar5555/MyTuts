@extends('templates.layout')

@section('title') Create Post @stop

@section('content')

<<<<<<< HEAD
@if( $errors )

	@foreach( $errors->all() as $error )
		{!! $error !!}
		<br>
	@endforeach

@endif

<div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">

	<form action="{{ action('PostsController@store') }}" method="POST" role="form">
		<legend>Create Post</legend>
=======

<div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">

	@include('templates.partials.alerts')

	<form action="{{ action('PostsController@store') }}" method="POST" role="form">
		<legend><span style="color: #333;">Create Post</span></legend>
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7

		<input type="hidden" value="{!! csrf_token() !!}" name="_token">

		<div class="form-group">
			<label>Post Title</label>
<<<<<<< HEAD
			<input name="post_title" type="text" class="form-control" id="" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Post Body</label>
			<textarea name="post_body" class="form-control" placeholder="Enter your post"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Post It!</button>
=======
			<input name="title" type="text" class="form-control" id="" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Post Body</label>
			<textarea name="body" class="form-control" placeholder="Enter your post"></textarea>
		</div>

		<button type="submit" class="btn btn-primary" id="loginButton">Post It!</button>
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
	</form>	
</div>


@stop