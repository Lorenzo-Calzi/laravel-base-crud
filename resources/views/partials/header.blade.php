{{-- <header id="site_header">
    <div class="bg_blue"></div>

    <nav>
        <img src="{{asset('img/dc-logo.png')}}" alt="">
        <ul>
            <li>
                <a href="{{route('comics.index')}}">HOME</a>
            </li>
            <li>
                <a href="{{route('comics.create')}}">CREATE</a>
            </li>
        </ul>
    </nav>

    <div class="jumbo"></div>
    
</header> --}}




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
                    <li>
                        <a href="{{route('comics.index')}}">HOME</a>
                    </li>
                    <li>
                        <a href="{{route('comics.create')}}">CREATE</a>
                    </li>
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
