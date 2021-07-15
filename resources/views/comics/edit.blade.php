@extends('layout.app')

@section('title', 'Create')

@section('main_content')
    <div class="create">
        <h1>Modify the Comic</h1>

        <form action="{{ route('comics.update', $comic->id)}}" method="post">
            @csrf

            @method('PUT') {{-- o PATCH --}}

            <div class="form-group">
                <label for="name">Nome Fumetto</label>
                <input type="text" name="name" id="name" value="{{$comic->name}}">
            </div>
            
            <div class="form-group">
                <label for="price">Costo Fumetto</label>
                <input type="text" name="price" id="price" value="{{$comic->price}}">
            </div>

            <div class="form-group">
                <h4>Current Image</h4>
                <img src="{{$comic->image}}" alt="">
            </div>
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" name="image" id="image" value="{{$comic->image}}">
            </div>

            <div class="form-group">
                <label for="available">Disponibilità</label>
                <input type="text" name="available" id="available" value="{{$comic->available}}">
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description" value="{{$comic->description}}">
            </div>
            
            <div class="form-group">
                <input type="submit" value="Invia" class="button">
            </div>

        </form>
    </div>
@endsection






    