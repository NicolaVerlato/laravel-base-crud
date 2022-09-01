@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>

        <div class="row row-cols-3">

            <div class="col">  

                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="card-body">
                            <h3>
                                {{ $comic->title }}
                            </h3>
                            <div>
                                <img class="m-1" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                {{-- <p class="p-2"><i>{{ $comic->description }}</i></p> --}}
                            </div>
                            <div>
                                <a class="btn btn-primary m-1" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Vai al dettaglio</a>
                            </div>
                            <div>
                                <a class="btn btn-primary m-1" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                            </div>
                            <div>
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger m-1" type="submit" value="Elimina" onClick="return confirm('Sei sicuro di volerlo eliminare?')">
                                </form>
                            </div> 
                        </div>
                    </div>   
                @endforeach   

            </div> 

        </div>
@endsection