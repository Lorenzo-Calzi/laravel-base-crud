@extends('layout.app')

@section('title', 'Comic')

@section('main_content')

    <div class="comics">

        {{-- <div class="button">
            <a href="{{route('comics.index')}}">Home</a>
        </div> --}}

        <h2>Comic</h2>

        <div class="table">
            <div class="element">
                <div class="image">
                    <img src="{{$comic->image}}" alt="">
                </div>
            </div>
            
            <div class="element">
                <div class="name">
                    <h3>Title</h3>
                    <span>{{$comic->name}}</span>
                </div>
            </div>
            
            <div class="element">
                <div class="price">
                    <h3>Prezzo</h3>
                    <span>${{$comic->price}}</span>
                </div>
            </div>
            
            <div class="element">
                <div class="available">
                    <h3>Disponibilità</h3>
                    <span>{{$comic->available}}</span>
                </div>  
            </div>
            
            <div class="element">
                <div class="description">
                    <h3>Descrizione</h3>
                    <span>{{$comic->description}}</span>
                </div>
            </div>
        </div>
    </div>


    
    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection





