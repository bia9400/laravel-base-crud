@extends('layouts.app')

@section('page_title',"Create")
    
@section('page_content')
<form action="{{route("comics.store")}}" method="post">
  @csrf

  <div class="mb-3">
      <label for="titleInput" class="form-label">Titolo Fumetto</label>
      <input type="text" class="form-control" name="title" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Descrizione Fumetto</label>
      <input type="text" class="form-control" name="description" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Immagine Fumetto</label>
      <input type="text" class="form-control" name="thumb" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Prezzo Fumetto</label>
      <input type="text" class="form-control" name="price" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Serie</label>
      <input type="text" class="form-control" name="series" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Data Vendita</label>
      <input type="text" class="form-control" name="sale_date" id="titleInput">
    </div>
    <div class="mb-3">
      <label for="titleInput" class="form-label">Tipologia Fumetto</label>
      <input type="text" class="form-control" name="type" id="titleInput">
    </div>

    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Salva</button>
      <a href="{{route("comics.index")}}">Annulla</a>
    </div>


  </form>
@endsection
