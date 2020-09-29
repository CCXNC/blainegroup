@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/123.png" alt="First slide">
            </div>
        </div>
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
            <h3>SPECIAL PRODUCT PORTFOLIO KEMIN</h3>
            <hr class="hr">
            <div class="keminproduct-wrapper">
                <div class="card">
                    <h3><img src="/images/logo/blank.png" width="700px;" height="300px"></h3>
                    <h5><img src="/images/logo/kemin.png" width="250px;"></h5>
                </div>
        </div>
    </section> 

    <section class="section category">
        <div class="container">
            <h3>CATEGORY AREA</h3>
            <hr class="hr">
            <div class="category-wrapper">
                <div class="card">
                    <h5><img src="/images/logo/adisseo.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/cbs.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/advance.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/kemin.png" width="200px;">  <span class="fa fa-link"></span></h5>
                </div>
            </div>
        </div>
    </section> 
@endsection
