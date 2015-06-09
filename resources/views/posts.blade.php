@extends('templates.layout')

@section('title') All Posts @stop

@section('content')
<<<<<<< HEAD
<h2>All Posts</h2>
<hr><br>
	<article>
		@foreach($posts as $post)
			<h2><a href="#">{!!$post->title!!}</a></h2>
			<p>published at {!!$post->created_at->format('d.m.Y H:i:s') !!}</p>
			<p>{!!$post->body!!}</p>
			<a href="#">Read More</a>
		@endforeach
	</article>
=======

	<div class="container" >
	<h2 style="padding-bottom: 20px; border-bottom: 2px solid rgba(51, 51, 51, 0.5);">All Posts</h2>
		@foreach($posts as $post)
			<br>
			<article>
				<h2 style="margin: 20px 0px;">{!! $post->title !!}</h2>
				<h5 style="color: #737373;"><span style="color: #FF4423;"><b>Published at:</b></span> {!! $post->created_at->diffForHumans() !!}</h5>
				<p style="margin: 20px 0px;">{!! $post->body !!}</p>
				<p><a href="" style="color: #333; text-decoration: none;">Read More <span style="color: #FF4423;"> &#8594</span></a></p>
			</article>
		@endforeach

		
	</div>

	<div class="container">
		<div id="myPagination">
			{!! $posts->render() !!}			
		</div>
	</div>
>>>>>>> 78a86689a0bc0a7ccae24e3f3917c86be3e1b4b7
@stop