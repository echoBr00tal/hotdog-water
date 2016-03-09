@extends('app')

@section('content')
    <div class="container">
        <h1>Blog</h1>
        @if (Auth::check())
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ url('blog/create') }}">New Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><a href="/blog/{{$post->slug}}">{{$post->title}}</a></h3>
                        </div>
                        <div class="panel-body">
                            <em>{{$post->author}}</em> - {{$post->summary}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
