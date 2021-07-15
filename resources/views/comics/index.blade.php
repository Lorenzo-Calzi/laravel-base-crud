@extends('layout.app')

@section('title', 'Comics')

@section('main_content')

    <div class="comics">
        <div class="genre">
            <span>Current Series</span>
        </div>
    
        <div class="container_card container">
            @foreach($comics as $comic)
                <div class="card">
                    <a href="{{ route('comics.show', $comic->id)}}"">
                        <img src="{{$comic->image}}" alt="">
                        <span>{{$comic->name}}</span>
                    </a>
                </div>            
            @endforeach
        </div>
    
        <div class="button">
            <span>LOAD MORE</span> 
        </div>
    </div>
    
@endsection

