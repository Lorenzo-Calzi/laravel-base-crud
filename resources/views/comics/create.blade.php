@extends('layout.app')

<h1>Create</h1>

<form action="{{ route('comics.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Nome Fumetto</label>
        <input type="text" name="name" id="name">
    </div>
    
    <div class="form-group">
        <label for="price">Costo Fumetto</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    
    <div class="form-group">
        <input type="submit" value="Invia">
    </div>

</form>