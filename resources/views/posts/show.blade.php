<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>:
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div>
            <button type=“button” styele="display:inline-block;" onclick="location.href='/posts/{{ $post->id }}/edit'">edit</button>
        
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button> 
            </form>
        </div>
        </br>
        <div class="footer">
            <a href="/posts">back</a>
        </div>
    </body>
</html>
