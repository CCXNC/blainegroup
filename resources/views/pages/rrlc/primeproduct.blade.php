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
    <section class="section product">
        <div class="container">
            <div class="product-wrapper">
                <div class="card">
                    <a href="{{ url('/rrlcprimeproductlist')}}">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>WSP Products</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com</p>
                    </a> 
                </div>
                <div class="card">
                    <a href="{{ url('/rrlcoralsolution')}}">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Oral Solution</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com </p>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Disinfectant</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com </p>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Nutraceuticals</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com </p>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>AB Premix</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com </p>
                    </a>
                </div>
                <div class="card">
                    <a href="#">
                        <h3><img src="/images/blank.png" width="300px;"></h3>
                        <h5>Premix</h5>
                        <p style="color:red;">Lorem ipsum dolor sit amet com </p>
                    </a>
                </div>
            </div>
        </div>
    </section> 
@endsection
