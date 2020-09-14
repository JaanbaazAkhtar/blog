<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                
                justify-content: center;
                width:100%;
                background-color:whitesmoke;
                max-height: 55%;
                
            }

            .hero {
                padding-top:5%;
            }

            .title {
                font-size: 68px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content row">
                <div class="title m-b-md hero col-md-6 offset-3">
                    BLOG
                    {{-- <br> --}}
                    <div >
                        <button type="button" class="btn btn-primary btn-md">Login</button>
                        <button type="button" class="btn btn-success btn-md">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="posts">
            {{-- @if($posts->count()>0)
                @foreach($posts as $post)
                    <div class="well">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on:{{$post->created_at}}</small>
                    </div>
                    <br>         
                @endforeach
            @endif --}}
            {{-- @extends('posts.index'); --}}
        </div>
    </body>
</html>
