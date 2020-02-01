<nav class="navbar navbar-expand-xl navbar-light mb-5 position-fixed">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="logo-image" src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto h-75">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cakes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">Wedding cakes</a>
                        <a class="dropdown-item" href="#!">Birthday cakes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">Something else</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bakery
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">Wedding cakes</a>
                        <a class="dropdown-item" href="#!">Birthday cakes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">Something else</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/order">Order</a>
                </li>

                @if(Auth::check())
                    <li class="logout-name">{{Auth::user()->name}}:</li>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="logout-button"  type="submit">Logout</button>
                    </form>
                @endif

                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            @section('home-link')
                                <li class="nav-item active ml-5   h5 home">
                                    <a class="home-link" href="{{ url('/home') }}" tabindex="-1" aria-disabled="true">Home</a>
                                </li>
                                <li class="nav-item active ml-5   h5 home">
                                    <a class="home-link" href="" tabindex="-1" aria-disabled="true">Logout</a>
                                </li>
                            @endsection
                            @else

                                <li class="nav-item active ml-3 h5 d-inline-block login">
                                    <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item active ml-3 h5 d-inline-block register">
                                        <a class="nav-link" href="{{ route('register') }}" tabindex="-1"
                                           aria-disabled="true">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </ul>

            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn search-button my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>