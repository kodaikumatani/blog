<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Japanese Annual Events</h1>
        <button type=“button” onclick="location.href='/posts/create'">create</button>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'></h2>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>
