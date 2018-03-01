@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>
    <!-- laravel collective form -->
    {!! Form::open(['action' => ['PostController@update',$post->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder'=>'Title'])}}
        </div>
         <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body',$post->body,['class' => 'form-control','placeholder'=>'Body'])}}
        </div>
        {{ Form::hidden('_method', 'PUT')}}
        <div class="form-group">
            {{Form::file('cover_image',['class' => 'form-control-file', 'style' => 'font-size:17px;'])}}
        </div>
        {{ Form::submit('Update',['class' => 'btn btn-primary btn-lg']) }}
    {!! Form::close()!!} 
@endsection