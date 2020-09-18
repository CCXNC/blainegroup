@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel1/header6.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header7.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header1.jpg" alt="Third slide">
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
                    <h3><img src="/images/offeredservice/sample1.jpg" width="250px;"></h3>
                    <h5>WSP Products</h5>
                    <p>Lorem ipsum dolor sit amet com <span class="fa fa-link"></span></p> 
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample3.jpg" width="250px;"></h3>
                    <h5>Oral Solution</h5>
                    <p>Lorem ipsum dolor sit amet com <span class="fa fa-link"></span></p>
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample1.jpg" width="250px;"></h3>
                    <h5>Disinfectant</h5>
                    <p>Lorem ipsum dolor sit amet com <span class="fa fa-link"></span></p>
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample3.jpg" width="250px;"></h3>
                    <h5>Nutraceuticals</h5>
                    <p>Lorem ipsum dolor sit amet com <span class="fa fa-link"></span></p>
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample1.jpg" width="250px;"></h3>
                    <h5>AB Premix</h5>
                    <p>Lorem ipsum dolor sit amet com <span class="fa fa-link"></span></p>
                </div>
            </div>
        </div>
    </section> 
@endsection
