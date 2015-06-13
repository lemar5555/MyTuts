<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>@yield('title') | Blog</title>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/css/hover.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

</head>
	<body>
	<!-- Navigation -->
	   <nav class="navbar navbar-inverse" role="navigation" style="padding-top: 14px; border-radius: 0px;">
	       	<div class="container" style="">
	           <!-- Brand and toggle get grouped for better mobile display -->
	           <div class="navbar-header">
	               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                   <span class="sr-only">Toggle navigation</span>
	                   <span class="icon-bar"></span>
	                   <span class="icon-bar"></span>
	                   <span class="icon-bar"></span>
	               </button>
	               <a class="navbar-brand" href="{{ action('PostsController@profile') }}">
	                   <!-- <img src="http://placehold.it/150x50&text=Logo" alt=""> -->
	                   <span id="logo" style="color: #FF4423; font-size: 30px;">
	                   		@if( Auth::check() )
	                   				{{ Illuminate\Support\Str::upper(Auth::user()->username . "'s") }}
	                   		@endif
	                   		@unless (Auth::check()) 
	                   				{!! "MY" !!}
	                   		@endunless
	                   		
	                   		BLOG
	                   </span>
	               </a>
	           </div>
	           <!-- Collect the nav links, forms, and other content for toggling -->
	           <div class="collapse navbar-collapse my-menu for-response" id="bs-example-navbar-collapse-1">
	               <ul class="nav navbar-nav ">

               		@if( Auth::check() )
	                   <li id="redHover" >
	                       <a class=" {!!  Request::is('/') ? 'active' : 'hvr-underline-reveal' !!} " href="{{ action('PostsController@profile') }}">Profile</a>
	                   </li>
	                   <li id="redHover" >
	                       <a class=" {!!  Request::is('posts') ? 'active' : 'hvr-underline-reveal' !!} "  href="{{ action('PostsController@index') }}">All Posts</a>
	                   </li>
	                   <li id="redHover" >
	                       <a class=" {!!  Request::is('posts/create') ? 'active' : 'hvr-underline-reveal' !!} " href="{{ action('PostsController@create') }}">Create Post</a>
	                   </li>
	                   <li id="redHover" >
	                       <a class="hvr-underline-reveal" href="{{ action('UsersController@logout') }}">Logout</a>
	                   </li>
	                @else
	                   <li id="redHover" >
	                       <a class=" {!!  Request::is('login') ? 'active' : 'hvr-underline-reveal' !!} "  href="{{ action('UsersController@loginPage') }}">Authorization</a>
	                   </li>
	                @endif
	               </ul>
	           </div>
	           <!-- /.navbar-collapse -->
	       	</div>
	       	<!-- /.container -->
	   </nav>