<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <h1>Create post form</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="" value="{{old('title')}}">
            <div>@error('title')
                <p>{{$message}}</p>
                @enderror
            </div>
        </div>
        <div>
            <label for="body">Body: </label>
            <textarea name="body" id="body" cols="30" rows="10" >{{old('body')}}</textarea>
        </div>
        <div>@error('body')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>

        @if (session('status'))
     <p>{{ session('status') }}</p>
@endif 
    </form>
</body>
</html>