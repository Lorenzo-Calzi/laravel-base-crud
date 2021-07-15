@extends('layout.app')

@section('title', 'Comics Create')

@section('main_content')
    <div class="create">
        <h3>Add A New Comic</h3>

        <form action="{{ route('comics.store')}}" method="post" class="container">
            @csrf

            <div class="short_content">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome del fumetto..."> 
                </div>
                
                <div class="form-group">
                    <label for="price">Costo</label>
                    <input type="text" name="price" id="price" placeholder="Prezzo del fumetto...">
                </div>
    
                <div class="form-group">
                    <label for="available">Disponibilità</label>
                    <input type="text" name="available" id="available" placeholder="Disponibilità del fumetto...">
                </div>
            </div>

            <div class="long_content">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="text" name="image" id="image" placeholder="Percorso dell'immagine...">
                </div>
                
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" placeholder="Descrizione del fumetto...">
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

