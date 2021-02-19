@extends('app')

    @section('content')
    <h1>Posts</h1>
        @foreach ($posts as $post)
            <h2> {{ $post->title }} </h2>
            <h3> {{ $post->body }} </h3>
        @endforeach


    @endsection