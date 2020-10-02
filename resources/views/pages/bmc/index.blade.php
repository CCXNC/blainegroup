@extends('layouts.bmcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/123.jpg" alt="First slide">
            </div>
        </div>
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

    <section class="section bmc-content-1">
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
    </section>
@endsection    