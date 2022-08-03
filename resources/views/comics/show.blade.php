@extends('layouts.app')

@section('page_title',$fumetto->title)
    
@section('page_content')
<div class="container py-3 text-center">
    <h1>{{$fumetto->title}}</h1>
    <p>{{$fumetto->description}}</p>
    <img src="{{$fumetto->thumb}}" alt="">
    <h3>Prezzo: {{$fumetto->price}}$</h3>
    
</div>


@endsection

