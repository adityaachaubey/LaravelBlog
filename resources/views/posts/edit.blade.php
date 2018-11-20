<!doctype html>
@extends('layouts.myblog')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/app.css" >
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  

        <title>Post Update</title>

       
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
     <h1>Edit Post</h1>
        {!! Form::open(['action' => ['PostsController@update',$post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
 {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
        </div>
 <div class="form-group">
         {{Form::label('body','Body')}}
 {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
         <div class="form-group">
            {{Form::file('cover_image')}}</div>
        {{Form::hidden('_method','PUT')}}
    {{Form::Submit('Submit',['class'=>"btn btn-primary"])}}
    
{!! Form::close() !!}
        
        <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>