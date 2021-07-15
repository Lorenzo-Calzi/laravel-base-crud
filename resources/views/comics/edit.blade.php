@extends('layout.app')

@section('title', 'Comics Edit')

@section('main_content')

    <div class="edit">
        <h3>Edit The Comic</h3>

        <form action="{{ route('comics.update', $comic->id)}}" method="post" class="container">
            @csrf

            @method('PUT')

            <div class="short_content">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" value="{{$comic->name}}">
                </div>
                
                <div class="form-group">
                    <label for="price">Costo</label>
                    <input type="text" name="price" id="price" value="{{$comic->price}}">
                </div>
    
                <div class="form-group">
                    <label for="available">Disponibilità</label>
                    <input type="text" name="available" id="available" value="{{$comic->available}}">
                </div>
    
                
            </div>

            <div class="long_content">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    {{-- <img src="{{$comic->image}}" alt=""> --}}
                    <input type="text" name="image" id="image" value="{{$comic->image}}">
                </div>
                
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" value="{{$comic->description}}">
                </div>
            </div>

            <div class="form-group">
                <div class="center">
                    <input type="submit" value="Invia" class="button">
                </div>
            </div>

        </form>
    </div>
@endsection






    