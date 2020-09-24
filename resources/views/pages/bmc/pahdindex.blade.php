@extends('layouts.bmcpahdapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture3.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h2 class="animated fadeInLeft">Taste the world with us</h2>
                    <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <br><br>
                    <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Read More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture1.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>    
@endsection    