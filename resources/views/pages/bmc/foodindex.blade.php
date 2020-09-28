@extends('layouts.bmcfoodapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
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
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/SampleCarousel/Picture1.jpg" alt="Third slide">
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
    <section class="section bmc-content-1">
        <div class="container">
            <h3>BLAINE FOOD CORPORATION</h3>
            <hr class="hr">
            <p>Blaine Food Corporation began as a trader of various flavors for food and beverage products. It gradually established other product lines such as quality raw materials and other food ingredients for bakery, beverage, meat, confectionery, soups and sauces, dairy, seasonings, fats, oils, and spreads.
            Today, Blaine Food Corporation has evolved into a preferred supplier of customized flavors, spices, and vitamins in the food industry. Blaine Food Corporation is the proud exclusive distributor in the Philippines of Daregal, a 120-year old company in the South of France known for its passion and tradition for the highest quality herbs.</p>
        </div>
    </section>
@endsection    