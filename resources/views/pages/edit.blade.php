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
    <div class="formgroup">
        {!! Form::model($tasks, ["url" => "update/$tasks->id", "method" => "PATCH"])
        !!}
        <ul>
            <li>
                {{ Form::label('category', 'Category:') }}
                {{ Form::text('category') }}
            </li>
            <li>
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title') }}
            </li> <li>
                {{ Form::label('content', 'Content:') }}
                {{ Form::textarea('content') }}
            </li>
            <li>
                {{ Form::label('rating', 'Rating:') }}
                {{ Form::text('rating') }}
            </li> <li>
                {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            </li>
        </ul>
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <a href="{{ url('/create') }}">Create New Reviews</a>
    Home of John Doe
@stop