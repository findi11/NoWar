@extends('layout.app')

@section('page_title')
    Головна
@endsection


@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./public/images/21210.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./public/images/Bohdana_self-propelled_howitzer_(cropped).jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./public/images/01001p68-0d01_1280x720.jpeg" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="./public/images/384.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
@endsection
