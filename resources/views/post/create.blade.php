@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>
    <!-- laravel collective form -->
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST' ]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
        </div>
         <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','',['class' => 'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{ Form::submit('Submit',['class' => 'btn btn-primary btn-lg']) }}
    {!! Form::close()!!}
@endsection