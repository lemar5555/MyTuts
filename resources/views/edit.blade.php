@extends('templates.layout')

@section('title') Edit @stop


@section('content')
	@include('templates.partials.alerts')
	<div class="container">
		<form id="myPostEdit" action="{{ action('PostsController@update',['id' => $post->id]) }}" method="POST" >
			<input type="hidden" name="_method" value="PUT">
			<article>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 make-editable" style="margin: 20px auto; padding-left: 0px;">
						<div class="buttons-panel">
									<a href="{{ action('PostsController@show',['id' => $post->id]) }}" class="btn btn-default awesome-buttons">
									   <i id="cancelMe" class="cancel-shake-icon"></i>
									</a>
							@if(Auth::id() == $post->user_id)
									<button type="submit" id="" class="btn btn-default awesome-buttons">
									   <i id="addMe" class="save-shake-icon"></i>
									</button>
							@endif
						</div>
						<h2 style="margin: 0px 0px 20px 0px;">Title</h2>
						<input type="text" class="form-control" name="title" value="{!! $post->title !!}">
						<!-- <h2 style="margin: 20px 0px;">{!! $post->title !!}</h2> -->

						<!-- <h5 style="color: #737373;"><span style="color: #FF4423;"><b>Published at:</b></span> {!! $post->created_at->diffForHumans() !!}</h5> -->
						<h2>Content</h2>
						<textarea rows="10" type="text" name="body" class="form-control v-resize-only">{!! $post->body !!}</textarea>
						<!-- <p style="margin: 20px 0px;">{!! $post->body !!}</p> -->
					</div>
			</article>
		</form>
	</div>
@stop