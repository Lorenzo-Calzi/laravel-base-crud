@extends('layout.app')

@section('title', 'Create')

@section('main_content')
    <div class="create">
        <h1>Add a new Comic</h1>

        <form action="{{ route('comics.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nome Fumetto</label>
                <input type="text" name="name" id="name">
            </div>
            
            <div class="form-group">
                <label for="price">Costo Fumetto</label>
                <input type="text" name="price" id="price">
            </div>

            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" name="image" id="image">
            </div>

            <div class="form-group">
                <label for="available">Disponibilità</label>
                <input type="text" name="available" id="available">
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">
            </div>
            
            <div class="form-group">
                <input type="submit" value="Invia" class="button">
            </div>

        </form>
    </div>
@endsection






    