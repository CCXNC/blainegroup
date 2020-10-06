@extends('layouts.bmcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/bmcpc/pahd-header4.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption">
                        <h3><i>Blaine Manufacturing Corporation</i></h3>
                        <p>Blaine Manufacturing Corporation (BMC) was founded in 2016 with the primary 
                            goal to create a synergy and efficiency between two business units–Blaine 
                            Food and Blaine Personal & Home Care that focus on human needs and goals 
                            on areas of food, personal care and home care. Major business activities 
                            presently engaged-in are manufacturing, selling, marketing and distribution 
                            of food/ beverage ingredients, personals and home care products and its raw materials.</p>
                        <a href="#" class="btn btn-transparent1 btn-rounded1 btn-large1">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/bmcpc/pahd-header4.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <div class="caption">
                        <h3><i>Blaine Manufacturing Corporation</i></h3>
                        <h5>Food Division</h5>
                        <p>Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent1 btn-rounded1 btn-large1">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/bmcpc/pahd-header4.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <div class="caption">
                        <h3><i>Blaine Manufacturing Corporation</i></h3>
                        <h5> Personal and Home Care Division</h5>
                        <p>Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent1 btn-rounded1 btn-large1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <section class="bmc-header-1">
        <div class="container">
            <div class="bmc-header-1-wrapper">
                <div class="card">
                <a href="{{ url('/bmcfoodhome') }}"><img src="/images/logo/blaine-food.png" width="350px"></a>
                </div>
                <div class="card">
                    <a href="{{ url('/bmcpahdindex') }}"><img src="/images/logo/personal-homecare.png" width="350px"></a>
                </div>
            </div>    
        </div>
    </section>

    <!--<section class="section bmc-content-1">
        <div class="container">
            <h3>BLAINE MANUFACTURING CORPORATION</h3>
            <hr class="hr">
            <p>Blaine Manufacturing Corporation (BMC) was founded in 2016 with the primary goal to create a synergy and efficiency between two business units–Blaine Food and Blaine Personal & Home Care that focus on human needs and goals on areas of food, personal care and home care. Major business activities presently engaged-in are manufacturing, selling, marketing and distribution of food/ beverage ingredients, personals and home care products and its raw materials.</p>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Blaine intensifies expansion to respon to the growing demand of food Industry. Blaine Corporation
                        established its food division, Blaine Food Corporation in 2004. It started as a supplier of various
                        flavors, savory ingredients, vitamins and minerals for food and beverage products. It expands and it
                        becomes one of the preferred suppliers of high-quality raw materials and it now offers its own
                        manufactured products. It is known as a local vitamin premix company for its strength in vitamin
                        fortification.
                        <br><br>
                        In 2018, Blaine Manufacturing Corporation was formed to respond to the increasing demand of the food
                        industry. The resources and capabilities of Blaine Food Corporation and Blaine Personal and Home Care
                        were consolidated to have a strong presence in the Philippine market.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/images/blank.png" width="400px;" alt="Video">
                </div>
            </div>
        </div>
    </section>-->
@endsection    