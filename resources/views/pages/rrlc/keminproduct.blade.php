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
    <section class="keminproduct">
        <div class="container">
            <h3>SPECIAL PRODUCT PORTFOLIO KEMIN</h3>
            <hr class="hr">
            <div class="keminproduct-wrapper">
                <div class="card" style="width: 30rem; ">
                    <br>
                    <h3><img src="/images/rrlc/specialproduct/kemin1.png" width="300px;"></h3>
                    <br>
                    <h5>Description</h5>
                    <p>The Molecularly Activated Mycotoxin Binder</p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>A high-end, purified and activated adsorbent that binds wide range of feed mycotoxins.</p>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        Regular Dosage: 1 kg/ ton
                    </p>
                    <p>High Mycotoxin </p>
                    <p>Contamination: 2-3 kg/ton</p>
                    <p>Packaging: 25 kg kraft bag</p>
                </div>
                <div class="card" style="width: 30rem; ">
                    <br><br><br>
                    <h3><img src="/images/rrlc/specialproduct/kemin2.png" width="300px;"></h3>
                    <br>
                    <h5>Description</h5>
                    <p>Blend Synergy of Multi Organic Acids</p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>Synergistic blend of most effective organic acids for better gut acidification and stronger antimicrobial activity:</p>
                    <ul>
                        <li>Better gut health</li>
                    </ul>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        Regular Dosage: 1 kg/ton
                    </p>
                    <p>With Incidence of Diarrhea/wet droppings: 2 to 3 kg/ton</p>
                    <p>Packaging: 25 kg kraft bag</p>
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
