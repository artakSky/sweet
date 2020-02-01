@extends('layouts.app')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                @section('home-link')
                    <li class="nav-item active ml-5   h5 home">
                        <a class="home-link" href="{{ url('/home') }}" tabindex="-1" aria-disabled="true">Home</a>
                    </li>
                @endsection
            @else

            @section('login')
                <li class="nav-item active ml-3 h5 login">
                    <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                </li>
            @endsection

            @if (Route::has('register'))

            @section('register')
                <li class="nav-item active ml-3 h5 register">
                    <a class="nav-link" href="{{ route('register') }}" tabindex="-1" aria-disabled="true">Register</a>
                </li>
            @endsection

            @endif
            @endauth
        </div>
    @endif
</div>



@section('carousel')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cake1.jpg" class="w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/cake2.jpg" class="w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/cake3.jpg" class="w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection


@section('cards')
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-4 ">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="images/card.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cakes</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="images/card2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bakery</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="images/card3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Candy</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-light">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
