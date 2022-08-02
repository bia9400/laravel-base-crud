<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    
    @foreach ($fumetti as $item)
        <h1>{{$item->title}}</h1>
    <p>{{$item->description}}</p>
    <a href="{{route("comics.show",$item->id)}}">show</a>
    @endforeach
    
</body>
</html>