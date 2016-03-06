@extends('app')

@section('content')
<div class="container">
	<h1>Edit {{$event->title}}</h1>
	@include('errors.list')	
	{!! Form::model($event, ['method' => 'PATCH', 'action' => ['EventsController@update', $event->slug]]) !!}
		@include('events.partials.form', ['buttonText' => "Update"])
	{!! Form::close() !!}
</div>
@stop
