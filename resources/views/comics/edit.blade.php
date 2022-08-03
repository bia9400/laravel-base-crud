@extends('layouts.app')

@section('page_title', 'Edit')

@section('page_content')

    <form action="{{route("comics.update",$fumetto->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="titleInput" class="form-label">Titolo Fumetto</label>
            <input type="text" class="form-control" value="{{$fumetto->title}}" name="title" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Descrizione Fumetto</label>
            <input type="text" class="form-control" value="{{$fumetto->description}}" name="description" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Immagine Fumetto</label>
            <input type="text" class="form-control" value="{{$fumetto->thumb}}" name="thumb" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Prezzo Fumetto</label>
            <input type="text" class="form-control" value="{{$fumetto->price}}" name="price" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Serie</label>
            <input type="text" class="form-control" value="{{$fumetto->series}}" name="series" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Data Vendita</label>
            <input type="text" class="form-control" value="{{$fumetto->sale_date}}" name="sale_date" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Tipologia Fumetto</label>
            <input type="text" class="form-control" value="{{$fumetto->type}}" name="type" id="titleInput">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Salva</button>
            <a href="">Annulla</a>
        </div>


    </form>
@endsection
