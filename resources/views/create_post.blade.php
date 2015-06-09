@extends('templates.layout')

@section('title') Create Post @stop

@section('content')

@if( $errors )

	@foreach( $errors->all() as $error )
		{!! $error !!}
		<br>
	@endforeach

@endif

<div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">

	<form action="{{ action('PostsController@store') }}" method="POST" role="form">
		<legend>Create Post</legend>

		<input type="hidden" value="{!! csrf_token() !!}" name="_token">

		<div class="form-group">
			<label>Post Title</label>
			<input name="post_title" type="text" class="form-control" id="" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Post Body</label>
			<textarea name="post_body" class="form-control" placeholder="Enter your post"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Post It!</button>
	</form>	
</div>


@stop