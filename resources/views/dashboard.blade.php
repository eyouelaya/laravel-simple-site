@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body"> 
                        <a href="/posts/create" class="btn btn-primary"> Create Post</a>  
                        @if(count($posts) > 0)
                         <h3>Your Blog Posts </h3>
                           @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <div class="well">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <img src="/storage/cover_images/{{$post->cover_image}}" width="100%">
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                                <small>Written on <strong>{{$post->created_at}}</strong> by <strong>{{$post->user->name}}</strong></small> 
                                            </div>
                                        </div>
                                    </div>
                                @endforeach 
                            @else
                                <p>No posts found</p>
                            @endif
                            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
