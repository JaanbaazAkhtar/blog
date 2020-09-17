@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <img src="/storage/cover_image/{{$post->cover_image}}" style="width:100%">
        <br>
        <small>Written on: {{$post->created_at}} </small>

        <div>
            {{$post->body}}
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
         
    </div>
    

    @endsection