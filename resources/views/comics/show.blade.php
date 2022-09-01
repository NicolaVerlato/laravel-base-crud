@extends('layouts.app')

@section('main_content')
    <h1>
        {{ $comics->title }}
    </h1>
    <div>
        <img class="py-1" src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
        <p class="py-3"><i>{{ $comics->description }}</i></p>
    </div>
    <div>
    <div>
        Data di pubblicazione: {{ $comics->sale_date }}
    </div>
    <div>
        Della serie: {{ $comics->series }}
    </div>
    <div>
        Tipologia: {{ $comics->type }}
    </div>
    <div>
        Prezzo: {{ $comics->price }} &euro;
    </div>
@endsection