@extends('pages.master')
@section('head')
@stop
@section('title')
    Creating Reviews
@stop
@section('heading')
    John Doe's going to Create new Reviews
@stop
@section('content')
    <div class="formgroup">
        {!! Form::open(['url' => 'create/task']) !!}
        <div class="formgroup">
            {!! Form::label('category', 'Category') !!}
            {!! Form::text('category', null, ['class' => 'formcontrol',
            'required'])!!}
        </div>
        <div class="formgroup">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'formcontrol',
            'required'])!!}
        </div>
        <p>
        </p>
        <div class="formgroup">
            {!! Form::label('content', 'Content') !!} {!!
Form::textarea('content', null, ['class' => 'formcontrol',
'required']) !!}
        </div><p></p>
        <div class="formgroup">
            {!! Form::label('rating', 'Rating') !!}
            {!! Form::text('rating', null, ['class' => 'formcontrol',
            'required'])!!}
        </div>
        <p>
        <p></p>
        <p></p>
        {!! Form::submit("Create Reviews") !!}
        {!! Form::close() !!}
    </div>
@stop
@section('footer')
    <a href="{{ url('/editreview') }}">John Doe is not in the mood to add
        new reviews so he's going back home to edit his old reviews!</a>
@stop