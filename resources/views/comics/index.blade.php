<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
<h1>Lista fumetti</h1>
<a href="{{route("comics.create")}}" class="btn btn-link">Aggiungi</a>
    @foreach ($fumetti as $item)
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->description }}</p>
        <a href="{{ route('comics.show', $item->id) }}">show</a>
    @endforeach

</body>

</html>
