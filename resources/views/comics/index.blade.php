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
                <div>
                    Data di pubblicazione: {{ $comic->sale_date }}
                </div>
                <div>
                    Della serie: {{ $comic->series }}
                </div>
                <div>
                    Tipologia: {{ $comic->type }}
                </div>
                <div>
                    Prezzo: {{ $comic->price }} &euro;
                </div>
                <a href="#">Vai al dettaglio</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection