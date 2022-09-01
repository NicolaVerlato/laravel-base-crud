@extends('layouts.app')

@section('main_content')
    <h1>Modifica il tuo fumetto</h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo: </label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine: </label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie: </label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione: </label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto: </label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') ? old('type') : $comic->type }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea name="description" class="form-control" class="form-control" placeholder="Leave a description here" id="description" style="height: 100px">{{ old('description') ? old('description') : $comic->description }}</textarea>
        </div>

        <input class="mb-3 btn btn-primary" type="submit" value="Modifica">
    </form>
@endsection