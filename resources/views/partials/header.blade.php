<header>
    <div class="header-top">

    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
                    </a>
                </div>
                <nav >
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <a href="#" class="{{Route::currentRouteName() === 'homapge' ? 'active' : '' }}">Characters</a>
                        </li>
                        <li class="list-item">
                            <a href="#">comics</a>
                        </li>
                        <li class="list-item">
                            <a href="#">Movie</a>
                        </li>
                        <li class="list-item">
                            <a href="#">tv</a>
                        </li>
                        <li class="list-item">
                            <a href="#">games</a>
                        </li>
                        <li class="list-item">
                            <a href="#">Collectibles</a>
                        </li>
                        <li class="list-item">
                            <a href="#">videos</a>
                        </li>
                        <li class="list-item">
                            <a href="#">fans</a>
                        </li>
                        <li class="list-item">
                            <a href="#">news</a>
                        </li>
                        <li class="list-item">
                            <a href="#">shop</a>
                        </li>  
                    </ul>             
                </nav> 
                 <div class="search">
                    <input type="text" placeholder="Search">
                 </div>         
            </div>
        </div>
    </div>
</header>