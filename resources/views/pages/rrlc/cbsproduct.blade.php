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
    <section class="cbsproduct">
        <div class="container">
            <h3>SPECIAL PRODUCT PORTFOLIO CBS</h3>
            <hr class="hr">
            <div class="cbsproduct-wrapper">
                <div class="card">
                    <br>
                    <h3><img src="/images/rrlc/specialproduct/cbs1.png" width="300px;"></h3>
                    <br>
                    <h5>Description</h5>
                    <p>Enhance Yeast Nucleotides</p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>A good AGP alternative that enhances the immune health of animals. It boosts immunity and enables faster recovery of animals during challenging condition:</p>
                    <ul>
                        <li>Better survivability</li>
                        <li>Farm efficiency</li>
                    </ul>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        Dosage: 500- 1000 g/ton
                    </p>
                    <p>Packaging: 25 kg kraft bag</p>
                </div>
                <div class="card">
                    <br><br><br><br>
                    <h3><img src="/images/rrlc/specialproduct/cbs2.png" width="300px;"></h3>
                    <br><br><br><br>
                    <h5>Description</h5>
                    <p>A Thermostable Phytase 5000 </p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>Increases the bioavailability of dietary phosphorus, calcium and other minerals bounded in plant raw materials.</p>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                       Dosage:
                       <ul>
                           <li style="font-size: 15px;">Layer – 60 to 80 g/ton</li>
                           <li style="font-size: 15px;">Broiler – 100 g/ton</li>
                           <li style="font-size: 15px;">Swine – 100 g/ton</li>
                       </ul>
                    </p>
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
