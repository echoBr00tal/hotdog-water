@extends('app')

@section('content')
<div class="container">
	<h1>Events</h1>
	
	@foreach ($events as $event)
		<h2>
			<a href="{{ action('EventsController@show', [$event->slug]) }}">{{ $event->title }}</a>
		</h2>
	@endforeach
</div>
@stop