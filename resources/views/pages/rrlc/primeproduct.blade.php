@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/primeproduct/image4.png" alt="First slide">
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
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ url('/rrlcprimeproductlist')}}">
                        <h3><img src="/images/rrlc/primeproduct/img1.png" width="300px;"></h3>
                        <h5>WSP Products</h5>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/rrlcoralsolution')}}">
                        <h3><img src="/images/rrlc/primeproduct/img2.png" width="300px;"></h3>
                        <h5>Oral Solution</h5>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('/rrlcdisinfectant')}}">
                        <h3><img src="/images/rrlc/primeproduct/img3.png" width="300px;"></h3>
                        <h5>Disinfectant</h5>
                    </a>
                </div>
             
            </div>
            <br>
            <div class="row">
                <div class="col-md-4" style="margin-left:200px ">
                    <a href="{{ url('/rrlcnutrac')}}">
                        <h3><img src="/images/rrlc/primeproduct/img5.png" width="300px;" height="300px"></h3>
                        <h5>Nutraceuticals</h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/rrlcpremixes') }}">
                        <h3><img src="/images/rrlc/primeproduct/img4.jpg" width="300px;" height="300px"></h3>
                        <h5>Premixes</h5>
                    </a>
                </div>
        
               
            </div>
        </div>
    </section> 
@endsection
