@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>
    <!-- laravel collective form -->
    {!! Form::open(['action' => ['PostController@update',$post->id] , 'method' => 'POST' ]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder'=>'Title'])}}
        </div>
         <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body',$post->body,['class' => 'form-control','placeholder'=>'Body'])}}
        </div>
        {{ Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update',['class' => 'btn btn-primary btn-lg']) }}
    {!! Form::close()!!} 
@endsection