@extends('templates.layout')

@section('title') All Posts @stop

@section('content')
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
@stop