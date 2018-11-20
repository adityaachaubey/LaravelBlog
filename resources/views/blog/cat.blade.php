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
     <h1>Posts</h1>
        
        @if(count($posts)>0)
        
        
        @foreach($posts as $post)
 <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}} Category {{$post->category}}</small>
                    </div>
                </div>
            </div>
        @endforeach
               
        {{$posts->links()}} 
        @else
        
        <p>No Posts Found</p>
        @endif
        </div>
    </body>
</html>