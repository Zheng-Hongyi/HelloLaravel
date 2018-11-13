@extends('pages.master')
@section('head')
@stop
@section('title')
    It's a newly created Task page
@stop
@section('heading')
    Review page of John Doe
@stop
@section('content')
    <h3>
        Category : {{ $tasks->category }}
    </h3>
    <h3>
        Title : {{ $tasks->title }}
    </h3>
    <div class='h2'>
        Review : {{ $tasks->content }}
    </div>
    <div class='h1'>
        Rating : {{ $tasks->rating }}
    </div>
    <p></p>
    <a href="{{ url('/task') }}">Back Home</a>
    &sdot;&sdot;&sdot;&sdot;&sdot;
@stop
@section('footer')
    <p></p>
    <a href="{{ url('/create') }}">Create New Reviews</a>
    Home of John Doe
@stop