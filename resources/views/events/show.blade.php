@extends('app')

@section('content')
<div class="container">
	<h1>{{ $event->title }} <a href="{{ action('EventsController@edit', [$event->slug]) }}">(edit)</a></h1>
	
	<div>
		{{ $event->description }}
	</div>
</div>
@stop
