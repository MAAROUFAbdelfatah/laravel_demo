@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="">
        <h1>{{$post->title}}</h1>
        <div>
            <p>{{$post->body}}</p>
        </div>
        <hr>
        <small>written on {{$post->created_at}}</small>
        <div>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        
    </div>
@endsection