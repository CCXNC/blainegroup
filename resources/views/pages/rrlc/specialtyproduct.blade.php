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
    <section class="section specialproduct">
        <div class="container">
            <h3>Our strategic partners for specialty products</h3>
            <p style="color:red;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error nisi excepturi nobis porro vel iusto? Quisquam voluptates nisi ducimus officia hic a sed illum officiis. Totam reprehenderit debitis laborum possimus!</p>
            <hr class="hr">
            <div class="specialproduct-wrapper">
                <div class="card">
                    <h5><img src="/images/logo/adisseo.png" width="220px;"></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/cbs.png" width="220px;"></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/advance.png" width="220px;"></h5>
                </div>
                <div class="card">
                    <h5><img src="/images/logo/kemin.png" width="220px;"></h5>
                </div>
            </div>
        </div>
    </section> 
@endsection
