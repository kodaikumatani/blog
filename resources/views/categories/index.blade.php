<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Annual Events</h1>
        <button type=“button” onclick="location.href='/posts/create'">create</button>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3 class='title'>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>:
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
