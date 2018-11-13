@extends('pages.master')
@section('head')
@stop
@section('title')
    It's a newly created Task page
@stop
@section('heading')
    Review page of John Doe
    <p></p><p></p><p></p> <p></p><p></p><p></p>
@stop
@section('content')
    <p></p><p></p><p></p> <p></p><p></p><p></p>
    @foreach ($tasks as $task)
        <h3>
            Category : {{ $task->category }}
        </h3> <h3>
            Title : <a href="/task/{{ $task->id }}">{{ $task->title }}</a>
            &sdot;&sdot;&sdot;&sdot;&sdot;
            Title : <a href="{{ action('ReviewController@show', [$task->id]) }}">{{
 $task->title }}</a>
            &sdot;&sdot;&sdot;&sdot;&sdot;
            Title : <a href="{{ url('/task', $task->id) }}">{{ $task->title }}</a>
        </h3>
    @endforeach
@stop
@section('footer')
    <p></p>
    <p></p><p></p><p></p><p></p><p></p><p></p>
    <p></p><p></p><p></p><p></p>
    &sdot;&sdot;&sdot;&sdot;&sdot;
    <a href="{{ url('/create') }}">Create New Reviews</a>
    &sdot;&sdot;&sdot;&sdot;&sdot;
    <p></p>
    <p></p><p></p><p></p><p></p><p></p><p></p>
    <p></p><p></p><p></p><p></p>
    Home of John Doe
@stop