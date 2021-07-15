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
            <a href="{{route('comics.create')}}">
                <span>CREATE COMICS</span>
            </a>
        </div>
    </div>

    <!-- Infos -->
    <div class="infos">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center">
            <div class="info">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>digital comics</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>dc merchandise</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>subscription</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">  
                <span>comic shop locator</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" style="height: 40px;">
                <span>dc power visa</span>
            </div>
        </div>
    </div>
    <!-- /Infos -->
    
@endsection

