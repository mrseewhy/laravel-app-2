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
            <input type="text" name="title" id="">
            
        </div>
        <div>
            <label for="body">Body: </label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        
        <div>
            <button type="submit">Submit</button>
        </div>

        @if ($errors->any())
                <div style="color:red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </form>
</body>
</html>