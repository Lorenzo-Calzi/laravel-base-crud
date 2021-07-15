{{-- @extends('layout.app')

@section('title', 'Comic')

@section('main_content')

    <div class="comics">

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
@endsection --}}




@extends('layout.app')

@section('title', 'Comic page')

@section('main_content')

        <div class="comic">
            <div class="bg_blue">
                <div class="container">
                    <img src="{{$comic->image}}" alt="">
                </div>
            </div>

            <!-- Description -->
            <div class="container">
                <div class="desc">
                    <div class="left_desc">
                        <h2>{{$comic->name}}</h2>

                        <div class="availability">
                            <div>
                                <span>U.S. Price: <strong>${{$comic->price}}</strong></span>
                            </div>
                            <div>
                                <span class="available">Available</span>
                                <strong>{{$comic->available}}</strong>
                            </div>  
                        </div>
                        
                        <p>{{$comic->description}}</p>
                    </div>

                    <div class="adv">
                        <span>ADVERTISEMENT</span>
                        <img src="{{asset('img/adv.jpg')}}" alt=""">
                    </div>
                </div>
            </div> 
            <!-- /Description -->

            <!-- Infos -->
            <div class="bg_white">
                <div class="container">
                    <div class="infos">
                        <div class="info" style="border-left: 1px solid rgba(196, 196, 196, 1);">
                            <span>digital comics</span>
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </div>

                        <div class="info">
                            <span>shop dc</span>
                            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </div>

                        <div class="info">
                            <span>comic shop locator</span>
                            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">  
                        </div>

                        <div class="info">
                            <span>subscriptions</span>
                            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Infos -->

        </div>

@endsection





