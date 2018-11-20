@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Add Post</a>
                    <h2>All Your Posts</h2>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                        
                        
                    </tr>
                        @foreach($posts as $post)
                        <tr>
                        <th>{{$post->title}}</th>
                            
                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                        <th> {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
                            
                            
                            </th>
                        
                        
                    </tr>
                        
                        @endforeach
                    
                     
                    </table>
                    @else
                    <h4>No Posts Found</h4>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection