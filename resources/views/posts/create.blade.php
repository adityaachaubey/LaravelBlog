<!doctype html>
@extends('layouts.myblog')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/app.css" >
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  

        <title>Posts</title>

       
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
     <h1>Create Posts</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
 {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category')}}  Food{{ Form::radio('category', 'Food') }}  Dance{{ Form::radio('category', 'Dance', true) }}  Culture{{ Form::radio('category', 'Culture', true) }}
        </div>
        
 <div class="form-group">
         {{Form::label('body','Body')}}
 {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}</div>
    {{Form::Submit('Submit',['class'=>"btn btn-primary"])}}
    
{!! Form::close() !!}
        
        <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>