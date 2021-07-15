<?php

    $menu = [
        [
            'href' => route('characters'),
            'text' => 'characters'
        ],
        [
            'href' => route('comics.index'),
            'text' => 'comics'
        ],
        [
            'href' => route('movies'),
            'text' => 'movies'
        ],
        [
            'href' => route('tv'),
            'text' => 'tv'
        ],
        [
            'href' => route('games'),
            'text' => 'games'
        ],
        [
            'href' => route('collectibles'),
            'text' => 'collectibles'
        ],
        [
            'href' => route('fans'),
            'text' => 'fans'
        ],
        [
            'href' => route('news'),
            'text' => 'news'
        ],
        [
            'href' => route('shop'),
            'text' => 'shop'
        ],
    ];

?>

<header id="site_header">
    <div class="up_header">
            <div class="up_content container">
                <span>DC POWER VISA <i class="far fa-registered"></i></span>
                <span>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></span>
            </div>
        </div>
    
        <div class="bottom_header container">
            <a href="{{route('home')}}">
                <img src="{{asset('img/dc-logo.png')}}" alt="">
            </a>
            
            <div>
                <ul>
                    @foreach($menu as $item)
                        <a href="{{$item['href']}}" class="{{Route::currentRouteName() === $item['text'] ? 'active' : ''}}">
                            @if ($item['text']==='shop')
                                <li>{{$item['text']}} <i class="fas fa-sort-down"></i></li>
                            @else
                                <li>{{$item['text']}}</li>  
                            @endif
                        </a>
                    @endforeach
                </ul>
            </div>
    
            <div>
                <input type="text" placeholder="Search"> 
                <i class="fas fa-search"></i>
            </div>
        </div>
    
        <!-- Jumbotron -->
        <div class="jumbo"></div>
        <!-- /Jumbotron -->
        
    </header>