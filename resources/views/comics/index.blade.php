@extends('layouts.app')
@section('page-title', 'Elenco dei Fumetti')

@section('content')
    <h1>Elenco dei Fumetti</h1>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
