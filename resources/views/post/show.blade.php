@extends('layouts.app')

@section('content')
    @if(isset($page))
        <a href="/dashboard" class="btn btn-default">Go Back</a>
    @else
        <a href="/posts" class="btn btn-default">Go Back</a>
    @endif
    <br><br>
    <div class="well"> 
        <img src="/storage/cover_images/{{$post->cover_image}}" width="80%" height="auto" alt="image">
            <h1>{{$post->title}}</h1>
        <small>Written on <strong>{{$post->created_at}}</strong> by <strong>{{$post->user->name}}</strong></small>
        <div>
            {{$post->body}}
        </div> 
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-left" style="margin-right:20px; margin-top:10px;"> Edit </a>
                {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'background-color:red; margin-top:10px;']) }}
                {!! Form::close() !!}
            @endif
        @endif 
    </div>
@endsection