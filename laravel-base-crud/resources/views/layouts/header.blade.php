<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <header>
        <div class="d_flex flex_center">
            <img src="img/logo.png" alt="">
        </div>

        <div class="d_flex flex_center">
            <a href="{{ route('home') }}"> HOME </a>
            <a href="{{ route('about') }}"> ABOUT </a>
            <a href="{{ route('blog') }}"> BLOG </a>
        </div>

    </header>