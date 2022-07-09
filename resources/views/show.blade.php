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
    <a href="/post"> Back to all posts</a>
    <div>
        <h4>{{$post['title']}}</h4>
        <p>{{$post->body}}</p>
    </div>
</body>
</html>