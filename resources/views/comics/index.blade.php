@extends('layouts.app')

@section('content')
    <h1>Elenco Fumetti</h1>
    <a href="{{ route('comics.create') }}">Aggiungi nuovo comic</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
