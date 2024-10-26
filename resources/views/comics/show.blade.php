@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>Autore: {{ $comic->author }}</p>
    <p>Data di pubblicazione: {{ $comic->publication_date }}</p>

    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Sei sicuro?')">Elimina</button>
    </form>
@endsection
