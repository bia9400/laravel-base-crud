@extends('layouts.app')

@section('page_title',$fumetto->title)
    
@section('page_content')
<div class="container py-3 text-center">
    {{$fumetto->description}}
</div>


@endsection

