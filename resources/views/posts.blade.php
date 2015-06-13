@extends('templates.layout')

@section('title') All Posts @stop

@section('content')
	@include('templates.partials.alerts')

	<div class="container" >
	<h2 style="padding-bottom: 20px; border-bottom: 2px solid rgba(51, 51, 51, 0.5);">All Posts</h2>
		@foreach($posts as $post)
			<form action="{!! action('PostsController@delete',['id' => $post->id]) !!}" method="POST">
				<input type="hidden" name="PUT">
				<br>
				<article>
				@if(Auth::id() == $post->user_id)
					<div class="buttons-panel">
						<button type="submit" id="" class="btn btn-default awesome-buttons">
						   <i id="addMe" class="remove-shake-icon"></i>
						</button>
					</div>
				@endif
					<!-- <span style="float: right;"><a class="remove-shake-icon" style="font-size: 20px;" href="{!! action('PostsController@delete',['id' => $post->id]) !!}" title=""></a></span> -->
					<h2 style="margin: 20px 0px;">{!! $post->title !!}</h2>
					<h5 style="color: #737373;"><span style="color: #FF4423;"><b>Published at:</b></span> {!! $post->created_at->diffForHumans() !!}</h5>
					<p style="margin: 20px 0px;">{!! str_limit($post->body, 120) !!}</p>
					<p><a href="{!! action('PostsController@show',['id' => $post->id]) !!}" style="color: #333; text-decoration: none;">Read More <span class="wobble-icon" style="color: #FF4423;"> </span></a></p>
				</article>
			</form>
		@endforeach
	</div>

	<div class="container">
		<div id="myPagination">
			{!! $posts->render() !!}			
		</div>
	</div>
@stop