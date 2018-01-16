@extends('layouts.app')

@section('title')
Welcome to HackerPair
@endsection

@section('content')
    <div class="title m-b-md">
        Hi {{ $name or 'Guest' }}, Welcome to HackerPair
    </div>
    <div class="links">
        <a href="{{ route('events.show', ['id' => 42]) }}">Events</a>
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection

@section('advertisement')
    @parent
    <p>
        HackerPair members always get 10% off at Tron Cafe!
    </p>
@endsection
