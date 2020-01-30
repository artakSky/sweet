@extends('layouts.app')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else

            @section('login')
                <li class="nav-item active ml-5 login">
                    <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                </li>
            @endsection

            @if (Route::has('register'))

            @section('register')
                <li class="nav-item active ml-2 register">
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
