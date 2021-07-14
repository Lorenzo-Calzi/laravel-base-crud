@extends('layout.app')

@section('title', 'Comics')

@section('main_content')

    <div class="comics">
        <div class="button">
            <a href="{{route('comics.create')}}">Crea il tuo Fumetto</a>
        </div>
    
        @foreach($comics as $comic)
            <div class="table">
                <div class="image">
                    <img src="{{$comic->image}}" alt="">
                </div>
    
                <div class="name">
                    <h3>Title</h3>
                    <a href="{{ route('comics.show', $comic->id)}}">{{$comic->name}}</a>
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
        @endforeach
    </div>

@endsection

