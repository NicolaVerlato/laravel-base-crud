@extends('layouts.app')

@section('main_content')
    <h1>Modifica il tuo fumetto</h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo: </label>
            <input type="text" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}" required>
        </div>

        <div>
            <label for="thumb">Immagine: </label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}" required>
        </div>

        <div>
            <label for="series">Serie: </label>
            <input type="text" id="series" name="series" value="{{ old('series') ? old('series') : $comic->series }}" required>
        </div>

        <div>
            <label for="sale_date">Data di pubblicazione: </label>
            <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}" required>
        </div>
        
        <div>
            <label for="type">Tipo di fumetto: </label>
            <input type="text" id="type" name="type" value="{{ old('type') ? old('type') : $comic->type }}" required>
        </div>

        <div>
            <label for="price">Prezzo: </label>
            <input type="text" id="price" name="price" value="{{ old('price') ? old('price') : $comic->price }}" required>
        </div>

        <div>
            <label for="description">Descrizione: </label>
            <textarea name="description" id="description" cols="30" rows="10" required>{{ old('description') ? old('description') : $comic->description }}</textarea>
        </div>
        <br>
        <input type="submit" value="Modifica">
    </form>
@endsection