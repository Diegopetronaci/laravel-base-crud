@extends('app')

    @section('content')
        
        @foreach ($posts as $post)
            <h2> {{ $post->title }} </h2>
            <h3> {{ $post->body }} </h3>
        @endforeach


    @endsection