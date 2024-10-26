@extends('layouts.app')
@section('page-title', 'Aggiungi Fumetto')

@section('content')
    <h1>Aggiungi un nuovo Fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="author">Autore:</label>
        <input type="text" id="author" name="author" required>

        <label for="publication_date">Data di pubblicazione:</label>
        <input type="date" id="publication_date" name="publication_date" required>

        <button type="submit">Salva</button>
    </form>
@endsection
