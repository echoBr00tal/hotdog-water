@extends('app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>

        <div>
            <p>
                <em>{{$post->author}}</em> - {{$post->published}}<br />
                {{ $post->body }}
                <br />
                @if (Auth::check())
                    <a href="/blog/edit/{{$post->id}}">Edit this post</a>
                @endif
            </p>
        </div>
    </div>
@stop
