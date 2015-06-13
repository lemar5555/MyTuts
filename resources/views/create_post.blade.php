@extends('templates.layout')

@section('title') Create Post @stop

@section('content')


<div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">

	@include('templates.partials.alerts')

	<form action="{{ action('PostsController@store') }}" method="POST" role="form">
		<legend><span style="color: #333;">Create Post</span></legend>

		<input type="hidden" value="{!! csrf_token() !!}" name="_token">

		<div class="form-group">
			<label>Post Title</label>
			<input name="title" type="text" class="form-control" id="" placeholder="Title">
		</div>
		<div class="form-group">
			<label>Post Body</label>
			<textarea name="body" class="form-control v-resize-only" placeholder="Enter your post"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary" id="loginButton">Post It!</button>
	</form>	
</div>


@stop