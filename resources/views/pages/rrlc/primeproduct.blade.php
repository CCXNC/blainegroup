@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/primeproduct/image2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/primeproduct/image1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/primeproduct/image3.png" alt="Third slide">
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
    <br>
    <section class="page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>OUR PRODUCTS</h3>
            </div>
        </div>
    </section>
    <section class="section product">
        <div class="container">
            <div class="product-wrapper">
                <div class="card">
                    <a href="{{ url('/rrlcprimeproductlist')}}">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>WSP Products</h5>
                    </a> 
                </div>
                <div class="card">
                    <a href="{{ url('/rrlcoralsolution')}}">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Oral Solution</h5>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Disinfectant</h5>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Nutraceuticals</h5>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>AB Premix</h5>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Premix</h5>
                    </a>
                </div>
            </div>
        </div>
    </section> 
@endsection
