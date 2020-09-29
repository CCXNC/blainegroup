@extends('layouts.bmcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture3.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h2 class="animated fadeInLeft">Taste the world with us</h2>
                    <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <br><br>
                    <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section class="bmc-header-1">
        <div class="container">
            <div class="bmc-header-1-wrapper">
                <div class="card">
                <a href="{{ url('/bmcfoodindex') }}"><img src="/images/logo/blaine-food.png" width="350px"></a>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus, quas quia eveniet perferendis at eum, in iusto odio voluptate, sint nulla inventore quaerat ab vitae amet! Earum itaque est aliquam, illo vitae ratione magni, explicabo in tenetur, amet reprehenderit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus ex laborum consequuntur neque nulla alias voluptatibus eveniet illo pariatur maxime expedita, dolorum beatae obcaecati similique dolorem quaerat iusto cupiditate fugit.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/blank.png" width="400px;" alt="Video">
                </div>
            </div>
        </div>
    </section>
@endsection    