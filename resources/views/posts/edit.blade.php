<!DOCTYPE HTML>
 <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="content_title">
                <h2>Title</h2>
                <input type="text" name='post[title]'  value="{{ $post->title }}">
                <p class='title_error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content_body">
                <h2>Body</h2>
                <input type='text'  name="post[body]"  value="{{ $post->body }}">
            </div>
            <input type="submit" value="update">
        </form>
       </div>
    </body>
 </html>