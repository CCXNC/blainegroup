@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/specialproduct/image1.png" alt="First slide">
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
    <section class="advanceproduct">
        <div class="container">
            <h3>SPECIAL PRODUCT PORTFOLIO ADVANCE ENZYME</h3>
            <hr class="hr">
            <div class="advanceproduct-wrapper">
                <center>
                    <div class="card" style="width: 30rem; ">
                        <br>
                        <h3><img src="/images/rrlc/specialproduct/advance1.png" width="300px;"></h3>
                        <br>
                        <h5>Description</h5>
                        <p>Complete Enzyme for Complex Feeds</p>
                        <h5>FEATURES AND BENEFITS</h5>
                        <p>A complete multienzymes applicable for both Corn-Soya and Wheat-Soya base feed formulation:</p>
                        <ul>
                            <li>Feed Efficiency</li>
                            <li>Feed Cost Savings</li>
                        </ul>
                        <h5>RECOMMENDED DOSAGE</h5>
                        <p>
                            Dosage: 200-300 g/ton
                        </p>
                        <p>Packaging: 25 kg kraft bag</p>
                    </div>
                </center>
                
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
