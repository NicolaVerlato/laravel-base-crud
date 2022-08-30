@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi il tuo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titolo: </label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="thumb">Immagine: </label>
            <input type="text" id="thumb" name="thumb">
        </div>

        <div>
            <label for="series">Serie: </label>
            <input type="text" id="series" name="series">
        </div>

        <div>
            <label for="sale_date">Data di pubblicazione: </label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        
        <div>
            <label for="type">Tipo di fumetto: </label>
            <input type="text" id="type" name="type">
        </div>

        <div>
            <label for="price">Prezzo: </label>
            <input type="text" id="price" name="price">
        </div>

        <div>
            <label for="description">Descrizione: </label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>
        <input type="submit" value="Aggiungi">
    </form>
@endsection