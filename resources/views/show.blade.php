<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Page</title>
</head>
<body>
    <h1>This is the show page</h1>

    @if (session('status'))
     <p>{{ session('status') }}</p>
     @endif
    <a href="/post"> Back to all posts</a>
    <div>
        <h4>{{$post['title']}}</h4>
        <p>{{$post->body}}</p>
    </div>
    <a href="/post/{{$post->id}}/edit">Edit</a>

    <form action="{{route('post.destroy', ['post' => $post->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" name="delete">delete</button>
    </form>
</body>
</html>