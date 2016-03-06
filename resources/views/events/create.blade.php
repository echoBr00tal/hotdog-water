@extends('app')

@section('content')
<div class="container">
	<h1>Create Event</h1>
	
	@include('errors.list')	
	
	{!! Form::open(['url'=> 'events']) !!}
		@include('events.partials.form', ['buttonText' => "Add"])
	{!! Form::close() !!}
</div>
@stop
