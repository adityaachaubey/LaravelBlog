<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/app.css" >

        <title>{{config('app.name','Adityaa Chaubey Blog')}}</title>

       
    </head>
    <body>
        @include('inc.navbar')
        <h1>{{$title}}</h1>
        <ul class="list group">
        @foreach($categories as $category)
            <li class="list-group-item"> {{$category}}</li>
        @endforeach
        </ul>
        <center>
        {!! Form::open(['action' => 'AdityaaController@cat', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
     <div class="form-group">
            {{Form::label('cat','Select Category')}} <br>
         Food{{ Form::radio('cat', 'Food') }}  Dance{{ Form::radio('cat', 'Dance', true) }}  Culture{{ Form::radio('cat', 'Culture', true) }}
        </div>
           {{Form::Submit('Submit',['class'=>"btn btn-primary"])}}
    
            {!! Form::close() !!}</center>
    </body>
</html>