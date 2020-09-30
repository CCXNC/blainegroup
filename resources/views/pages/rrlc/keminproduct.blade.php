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
                    <h3><img src="/images/blank.png" width="700px;" height="300px"></h3>
                    <h5><img src="/images/logo/kemin.png" width="250px;"></h5>
                </div>
        </div>
    </section> 

    <section class="section category">
        <div class="container">
            <h3>CATEGORY AREA</h3>
            <hr class="hr">
            <div class="category-wrapper">
                <a href="{{ url('/adisseoproduct') }}">
                    <div class="card">
                        <h5><img src="/images/logo/adisseo.png" width="220px;"></h5>
                    </div>
                </a> 
                <a href="{{ url('/cbsproduct')}}">
                    <div class="card">
                        <h5><img src="/images/logo/cbs.png" width="220px;"></h5>
                    </div>
                </a>
                <a href="{{ url('/enzymeproduct')}}">
                    <div class="card">
                        <h5><img src="/images/logo/advance.png" width="220px;"></h5>
                    </div>
                </a>    
                <a href="{{ url('/keminproduct') }}">
                    <div class="card">
                        <h5><img src="/images/logo/kemin.png" width="220px;"></h5>
                    </div>
                </a>
            </div>
        </div>
    </section> 
@endsection
