@extends('layout.app')

@section('title', 'Comic')

@section('main_content')

    <div class="comics">

        <div class="button">
            <a href="{{route('comics.index')}}">Home</a>
        </div>

        <div class="table">
            <div class="image">
                <img src="{{$comic->image}}" alt="">
            </div>
        
            <div class="name">
                <h3>Title</h3>
                <span>{{$comic->name}}</span>
            </div>
        
            <div class="price">
                <h3>Prezzo</h3>
                <span>${{$comic->price}}</span>
            </div>
        
            <div class="available">
                <h3>Disponibilità</h3>
                <span>{{$comic->available}}</span>
            </div>
        
            <div class="description">
                <h3>Descrizione</h3>
                <span>{{$comic->description}}</span>
            </div>
        </div>
    </div>
@endsection





