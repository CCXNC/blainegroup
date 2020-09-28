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
    <section class="keminproduct">
        <div class="container">
            <h3>SPECIAL PRODUCT PORTFOLIO ADVANCE ENZYME</h3>
            <hr class="hr">
            <div class="keminproduct-wrapper">
                <div class="card">
                    <h3><img src="/images/blank.png" width="600px;" height="300px"></h3>
                    <h5><img src="/images/advance.png" width="250px;"></h5>
                </div>
        </div>
    </section> 

    <section class="section category">
        <div class="container">
            <h3>CATEGORY AREA</h3>
            <hr class="hr">
            <div class="category-wrapper">
                <div class="card">
                    <h5><img src="/images/adisseo.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/cbs.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/advance.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/kemin.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
            </div>
        </div>
    </section> 
@endsection
