@extends('templates.layout')

@section('title') Edit @stop

@section('content')
	<div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">
	<form action="{{ action('PostsController@edit') }}" method="POST" role="form">
		<legend>Edit Post</legend>

		<div class="form-group">
			<label>Post Title</label>
			<input name="post_title" type="text" class="form-control" id="" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Post Body</label>
			<textarea name="post_body" class="form-control" placeholder="Enter your post"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
@stop