@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/aboutus22.jpg" alt="First slide">
            </div>
        </div>
    </div>
    <br>
    <section class="page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>ABOUT US</h3>
            </div>
        </div>
    </section>
    <section class="about-1">
        <div class="container">
            <div class="col-md-12">
                <p>
                    Refamed Research Laboratory Corporation is a globally competitive, 100% Filipino-owned company engaged in manufacturing, marketing, and distribution of animal health and nutrition products since 1999. Refamed also boasts its achievement of attaining FDA cGMP (Certificate of Current Good Manufacturing Practice) and SGS ISO 9001-2015 certification for quality manufacturing systems and processes.
                </p>
                <p>    
                    Aside from its excellent quality products Refamed is also the exclusive distributor of Adisseo, a world leader in nutritional solutions and additives for animal feeds. Refamed and Adisseo work hand-in-hand to make safe and quality methionine, enzymes, vitamins, organic selenium, and probiotics available in the market. Its renowned products include Rhodimet AT88®, Rovabio®, Microvit®, Selisseo®, and Alterion®. In addition to its portfolio, Refamed also partners with Kemin (for Toxfin Dry® and Acid Lac® Premium Dry) and Canadian Biosystem (Phytomax® and Maxigen Plus ®).
                </p>
                <p>
                    Located in Blaine Industrial Complex, a 1.6-hectare animal health and premixing facility in Carmona, Cavite, Philippines.
                </p>
                <h3>Our Vision</h3>
                <hr class="hr">
                    <p>REFAMED as a leading innovative company in manufacturing and marketing animal health and nutrition products that foster development of globally competitive Farmers.</p> 
            </div>
            <div class="header">
                <div class="col-md-12">
                    <h3>Address</h3>
                    <hr class="hr">
                </div>    
                <div class="col-md-8">    
                    <h5><span class="fa fa-map-marker">&nbsp;</span>Main Office:Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</h5>
                </div>
            </div>
            <br>
            <center>
                <div style="width: 1100px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </center>
            <br>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        REFAMED CARES
                    </div>
                    <div class="card-body">
                    <center><img src="/images/rrlc/aboutus2.png" width="600px;" height="350px;" alt=""></center>
                    <p>REFAMED believes that giving back to the Filipino community is a responsibility of everybody. It is our commitment that we want to continue for a long time.  
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
