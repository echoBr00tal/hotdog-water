@extends('app')

@section('content')
    <div class="container">
        <h1>Create Blog Post</h1>

        @include('errors.list')

        {!! Form::open(['url'=> 'blog']) !!}
        @include('blog.partials.form', ['buttonText' => "Create"])
        {!! Form::close() !!}
    </div>
@stop