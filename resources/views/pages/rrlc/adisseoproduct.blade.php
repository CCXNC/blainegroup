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

    
    <section class="section adisseoproduct">
        <div class="container">
            <h3>SPECIAL PRODUCT PORTFOLIO ADISSEO</h3>
            <hr class="hr">
            <div class="adisseoproduct-wrapper">
                <div class="card">
                    <h3><img src="/images/rrlc/specialproduct/adisseo1.png" width="250px;"></h3>
                    <h5>Description</h5>
                    <p>Pure Organic Selenium: 100% Seleno-OH-methionine </p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>A powerful antioxidant, stable and highly bioavailable organic selenium for:</p>
                        <ul>
                            <li>Stress Resistance</li>
                            <li>Better ADG</li>
                            <li>Better Fertility</li>
                            <li>Better quality of meat and eggs</li>
                        </ul>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        Selisseo 0.1% (1000 ppm)
                        Dosage: 200-300 g/ton
                    </p>
                    <p>
                        Selisseo 0.2% (2000 ppm)
                        Dosage: 100- 150 g/ton
                    </p>    
                    <p>Packaging: 25 kg kraft bag</p>  
                    <p>
                        
                        Selisseo 2% (20,000 ppm)
                        Dosage: 10-15 g/ton
                    </p>  
                    <p>
                        Packaging: 20 kg kraft bag
                    </p>      
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/specialproduct/adisseo2.png" width="220px;"></h3>
                    <h5>Description</h5>
                    <p>The Consistent Probiotic Solution
                        Bacillus subtilis 29784
                        </p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>A unique strain of B. subtilis with consistent action and results in poultry:</p>
                        <ul>
                            <li>Better gut health</li>
                            <li>Prevents necrotic enteritis</li>
                            <li>Consistent production performance</li>
                        </ul>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        Dosage: 200 g/ ton
                    </p>
                    <p> Packaging: 25 kg kraft bag</p> 
                </div>
                <div class="card">
                    <br>
                    <h3><img src="/images/rrlc/specialproduct/adisseo3.png" width="300px;"></h3>
                    <br>
                    <h5>Description</h5>
                    <p>The Versatile Liquid Multi-Enzyme</p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>A complete NSP enzyme supplemented in drinking water for better feed utilization and efficiency.</p>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        <b>Dosage:125 ml/ 1000 L of water</b>
                        
                    </p>
                    <p>Dosage: 200-300 g/ton</p>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/specialproduct/adisseo4.png" width="200px;"></h3>
                    <h5>Description</h5>
                    <p>DL-hydroxy methionine 88% DL-HMTBA Liquid Form </p>
                    <h5>FEATURES AND BENEFITS</h5>
                    <p>Economical and efficient alternative for DL methionine.</p>
                    <h5>RECOMMENDED DOSAGE</h5>
                    <p>
                        As recommended by Animal Nutritionist based on animal requirement
                    </p>
                </div>
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
