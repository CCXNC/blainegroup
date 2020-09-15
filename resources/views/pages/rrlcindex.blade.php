@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img3.png" alt="Third slide">
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

    <section class="section content-1">
        <div class="container">
            <div class="row title">
                <div class="col-md-6">
                    <h3>Lorem ipsum dolor sit amet, conse</h3>
                    <hr class="hr">
                </div>
                <div class="col-md-6">
                    <h3>Lorem ipsum dolor sit amet, conse</h3>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Nunc non blandit massa enim nec. Purus in mollis nunc sed id semper. 
                        Pellentesque habitant morbi tristique senectus. Rhoncus aenean vel 
                        elit scelerisque mauris pellentesque pulvinar pellentesque habitant. 
                        Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. 
                        Facilisis mauris sit amet massa vitae. Mi proin sed libero enim sed 
                        faucibus turpis in. Libero justo laoreet sit amet cursus. Varius vel 
                        pharetra vel turpis nunc eget lorem. Eu facilisis sed odio morbi quis 
                        commodo. 
                        <br><br>
                        Leo duis ut diam quam. Sed euismod nisi porta 
                        lorem mollis aliquam ut porttitor. Pretium viverra suspendisse 
                        potenti nullam ac tortor. Sed viverra ipsum nunc aliquet bibendum. 
                        Maecenas pharetra convallis posuere morbi leo urna.</p>
                </div>
                <div class="col-md-6">
                    <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ab voluptatibus, perspiciatis vitae cupiditate enim cum modi commodi obcaecati aliquid. At rerum, quasi voluptas explicabo adipisci sapiente maiores vel maxime.</p>
                    <img class="d-block w-100" src="/images/content/video.png" alt="Video">
                </div>
            </div>
        </div>
    </section>

    <section class="section content-2">
        <div class="container">
            <h2>Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Laudantium exercitationem consequuntur odio cumque, 
                magnam quae veniam, officia doloribus quam facilis 
                saepe distinctio aliquam! Quisquam sed ea dolorem 
                neque autem praesentium.
            </p>
            <hr class="hr">
            <div class="content-2-wrapper">
                <div class="card">
                    <h3><img src="/images/products/prod1.jpg" width="120px;"></h3>
                    <h5>Product 1</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/products/prod2.jpg" width="120px;"></h3>
                    <h5>Product 2</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/products/prod3.jpg" width="120px;"></h3>
                    <h5>Product 3</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/products/prod3.jpg" width="120px;"></h3>
                    <h5>Product 4</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
