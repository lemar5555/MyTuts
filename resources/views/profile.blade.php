@extends('templates.layout')

@section('title') Profile @stop

@section('content')
	@include('templates.partials.alerts')
		<!-- Page Content -->

		<div class="col-md-3" style="border: 1px solid #333; border-radius: 4px; padding: 0px; margin: 40px 10px 10px 10px;">
			<form action="" method="POST" enctype="multipart/form-data">
			{{-- <input type="image" name="image"> --}}
				<div class="col-md-5" style="padding: 0px; margin-right: 20px; text-align: center;">
					<img src="/images/default.png" alt="Profile default image" style="width: 100px; height: 150px;">				
					<span class="btn btn-default btn-file awesome-buttons" style="margin: auto 0px;">
					   <label for="" class="awesome-buttons" style="margin: 0px 0px 10px 13px;">
					   		Upload Image
					   		<i id="addMe" class="upload-icon"></i>
					   </label>
					   <input type="file">
					</span>
				</div>
			</form>
			<div class="col-md-6" style="padding: 0px;"><h2 style="margin-top: 0px;">{!! $user->username !!}</h2></div>
		</div>

		<div class="col-md-8" >
			@foreach($posts as $post)
				<form  action="{!! action('PostsController@delete',['id' => $post->id]) !!}" method="POST">
					<input type="hidden" name="PUT">
					<br>
					<article>
					<div class="buttons-panel">
						<button type="submit" id="" class="btn btn-default awesome-buttons">
						   <i id="addMe" class="remove-shake-icon"></i>
						</button>
					</div>
						<!-- <span style="float: right;"><a class="remove-shake-icon" style="font-size: 20px;" href="{!! action('PostsController@delete',['id' => $post->id]) !!}" title=""></a></span> -->
						<h2 style="margin: 20px 0px;">{!! $post->title !!}</h2>
						<h5 style="color: #737373;"><span style="color: #FF4423;"><b>Published at:</b></span> {!! $post->created_at->diffForHumans() !!}</h5>
						<p style="margin: 20px 0px;">{!! str_limit($post->body, 120) !!}</p>
						<p><a href="{!! action('PostsController@show',['id' => $post->id]) !!}" style="color: #333; text-decoration: none;">Read More <span class="wobble-icon" style="color: #FF4423;"> </span></a></p>
					</article>
				</form>
			@endforeach		
		</div>
		<!-- <img draggable="false" src="/images/HomePagePicture.jpg" alt="HomePagePicture" style="position: absolute; width: 100%; margin: 20px 0px;"> -->
@stop