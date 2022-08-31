@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi il tuo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="title">Titolo: </label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="thumb">Immagine: </label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}" required>
        </div>

        <div>
            <label for="series">Serie: </label>
            <input type="text" id="series" name="series" value="{{ old('series') }}" required>
        </div>

        <div>
            <label for="sale_date">Data di pubblicazione: </label>
            <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}" required>
        </div>
        
        <div>
            <label for="type">Tipo di fumetto: </label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" required>
        </div>

        <div>
            <label for="price">Prezzo: </label>
            <input type="text" id="price" name="price" value="{{ old('price') }}" required>
        </div>

        <div>
            <label for="description">Descrizione: </label>
            <textarea name="description" id="description" cols="30" rows="10" required>{{ old('description') }}</textarea>
        </div>
        <br>
        <input type="submit" value="Aggiungi">
    </form>
@endsection