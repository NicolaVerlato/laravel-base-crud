@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h3>
                {{ $comic->title }}
            </h3>
            <div>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p><i>{{ $comic->description }}</i></p>
            </div>
            <div>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Vai al dettaglio</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection