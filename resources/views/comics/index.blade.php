@extends('layouts.app')

@section('page_title',"Comics")
    
@section('page_content')
    <h1>Lista fumetti</h1>
<a href="{{route("comics.create")}}" class="btn btn-link">Aggiungi</a>
    @foreach ($fumetti as $item)
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->description }}</p>
        <a href="{{ route('comics.show', $item->id) }}">show</a>
    @endforeach

@endsection



