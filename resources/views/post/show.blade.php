@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="well">
        <h1>{{$post->title}}</h1>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div> 
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-left" style="margin-right:20px; margin-top:10px;"> Edit </a>
        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'background-color:red; margin-top:10px;']) }}
        {!! Form::close() !!}
    </div>
@endsection