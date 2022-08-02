<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aggiungi fumetto</title>
</head>
<body>
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
</body>
</html>