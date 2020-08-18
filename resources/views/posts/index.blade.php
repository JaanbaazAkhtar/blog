@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        @if(count($posts)> 0 )
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on:{{$post->created_at}}</small>
                </div>
                <br>
            @endforeach
            {{$posts->links()}}
        @else
        <p>NO POSTS AVAILABLE TO SHOW ADD SOME POST!!!!!</p>
        @endif
    </div>
    

@endsection