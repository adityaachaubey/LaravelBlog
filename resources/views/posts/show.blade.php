<!doctype html>
@extends('layouts.myblog')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/app.css" >
        <title>Posts</title>
        

       
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        <div class="jumbotron text-center">
            
     <h1>{{$post->title}}</h1>
        <small>Created  {{$post->created_at}} by  {{$post->user->name}} Category {{$post->category}}</small>
             <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
        <div>
            {!!$post->body!!}
            
        </div>
            <a href="/posts" class="btn btn-default">Back</a>
            @if(!Auth::guest())
              @if(Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            <hr>
          
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
        @endif    
               
        </div>
        
    </body>
</html>