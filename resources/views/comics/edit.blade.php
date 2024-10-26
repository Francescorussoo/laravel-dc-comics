@extends('layouts.app')

@section('content')
    <h1>Modifica Fumetto</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" value="{{ $comic->title }}" required>

        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" required>{{ $comic->description }}</textarea>

        <label for="author">Autore:</label>
        <input type="text" id="author" name="author" value="{{ $comic->author }}" required>

        <label for="publication_date">Data di pubblicazione:</label>
        <input type="date" id="publication_date" name="publication_date" value="{{ $comic->publication_date }}" required>

        <button type="submit">Aggiorna</button>
    </form>
@endsection
