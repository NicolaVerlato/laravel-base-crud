@extends('layouts.app')

@section('main_content')
    <h1>Modifica il tuo fumetto</h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo: </label>
            <input type="text" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div>
            <label for="thumb">Immagine: </label>
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div>
            <label for="series">Serie: </label>
            <input type="text" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div>
            <label for="sale_date">Data di pubblicazione: </label>
            <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        
        <div>
            <label for="type">Tipo di fumetto: </label>
            <input type="text" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div>
            <label for="price">Prezzo: </label>
            <input type="text" id="price" name="price" value="{{ $comic->price }}">
        </div>

        <div>
            <label for="description">Descrizione: </label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
        <br>
        <input type="submit" value="Modifica">
    </form>
@endsection