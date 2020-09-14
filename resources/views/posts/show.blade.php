@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <small>Written on: {{$post->created_at}} </small>

        <div>
            {{$post->body}}
        </div>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}
         
    </div>
    

    @endsection