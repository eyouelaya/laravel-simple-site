@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>
    <!-- laravel collective form -->
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
        <div class="form-group row">
            {{Form::label('title', 'Title',['class' => 'col-sm-1 col-form-label', 'for' => 'title' , 'style'=>'font-size:20px; text-align:center;'])}}
            <div class="col-sm-10">
                {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
            </div>
        </div>
         <div class="form-group row">
            {{Form::label('body', 'Body',['class' => 'col-sm-1 col-form-label', 'for' => 'body' , 'style'=>'font-size:20px; text-align:center;'])}}
            <div class="col-sm-10">
                {{Form::textarea('body','',['class' => 'form-control','placeholder'=>'Body Text'])}}
            </div>  
        </div>
        <div class="form-group">
            {{Form::file('cover_image',['class' => 'form-control-file', 'style' => 'font-size:17px;'])}}
        </div>
        {{ Form::submit('Submit',['class' => 'btn btn-primary btn-lg']) }}        
    {!! Form::close()!!}
@endsection