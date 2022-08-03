@extends('layouts.app')

@section('page_title', 'Comics')

@section('page_content')
    <div class="container py-3 text-center">
        <a href="{{ route('comics.create') }}" class="btn btn-danger">Aggiungi</a>
        <h1 class="mt-5 py-3 text-start">Lista fumetti:</h1>
        <div class="row row-cols-3 mb-3 text-start ">
            @foreach ($fumetti as $item)
                <div class="col gap-2">
                    <div class="card bg-danger h-100 px-2">
                        <h3 class="text-center">{{ $item->title }}</h3>
                        @php
                            $newDescription=explode(" ",$item->description)
                        @endphp
                        <p class="text-white">
                            @for ($i = 0; $i < 10; $i++)
                                {{$newDescription[$i]}}
                            @endfor
                            ...
                        </p>
                        <a class="text-center" href="{{ route('comics.show', $item->id) }}">Details</a>
                        <a class="text-center" href="{{ route('comics.edit', $item->id) }}">Modifica</a>
                        <form class="form-delete" action="{{ route('comics.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Elimina</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


@endsection
