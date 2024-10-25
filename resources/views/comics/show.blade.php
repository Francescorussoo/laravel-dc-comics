@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>Autore: {{ $comic->author }}</p>
    <p>Data di pubblicazione: {{ $comic->publication_date }}</p>
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
