@extends('app')

@section('content')
    <div class="container">
        <h1>Edit {{$post->title}}</h1>

        @include('errors.list')

        {!! Form::model(['title' => $post->title, 'body' => $post->body, 'summary' => $post->summary, 'blog_category_id'=>$post->blog_category_id]) !!}
        @include('blog.partials.form', ['buttonText' => "Create"])
        {!! Form::close() !!}
    </div>
@stop
