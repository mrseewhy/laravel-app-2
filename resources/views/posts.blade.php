<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>This is the posts page</h1>
    @if(count($posts) == 0)
    <div>
        <h4>No Posts to show!</h4>
        
    </div>

    @else
    @foreach ($posts as $post)
        <div>
            <h4>{{$post['title']}}</h4>
            <p>{{$post->body}}</p>
        </div>
   @endforeach

    @endif
</body>
</html>