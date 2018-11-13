@extends('pages.master')
@section('head')
@stop
@section('title')
    It's a newly created Task page
@stop
@section('heading')
    John Doe's going to edit Review page
@stop
@section('content')
    @foreach ($tasks as $task)
        <h3>
            Category : {{ $task->category }}
        </h3> <h3>
            Title : <a href="{{ url('/edit', $task->id) }}">{{ $task->title }}</a>
        </h3>
    @endforeach
@stop
@section('footer')
    <a href="{{ url('/create') }}">Create New Reviews</a>
    Home of John Doe
@stop