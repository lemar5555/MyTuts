
@if( Session::has('message') )

	<div class="alert alert-success remove-me">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{!! Session::get('message') !!}</strong>
	</div>
	

@endif

@if($errors->has())

	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		@foreach( $errors->all() as $error )
			<strong>Error!</strong> {!! $error !!}<br>
		@endforeach
	</div>
	
@endif
