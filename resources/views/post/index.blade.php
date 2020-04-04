<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/post/index.css')}}">

</head>

<body>
    <h1 class="text-center">{{auth()->user()->name}}'s Posts</h1>
    <div class="container">
        @if (auth()->user()->id === $posts[0]->author_id)
        <ul>
            @foreach ($posts as $post)
            <div class="posts">
                <h5>{{$post->title}}</h5>
                <a href="post/" class="btn btn-outline-primary" role="button">Show</a>
            </div>
            @endforeach
        </ul>
        {{$posts}}
        @endif
    </div>

</body>

</html>