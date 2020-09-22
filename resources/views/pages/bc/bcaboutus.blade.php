@extends('layouts.bcapp')

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
    <section class="section bc-about1">
        <div class="container">
            <div class="row title">
                <h3><u>THE VISION</u></h3>
                <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Nunc non blandit massa enim nec. Purus in mollis nunc sed id semper. 
                    Pellentesque habitant morbi tristique senectus. 
                </p>
            </div>
            <div class="row title">
                <h3><u>THE MISSION</u></h3>
                <p class="info">
                    Customer:
                    To consistently deliver VALUE to customers.
                    <br><br>
                    People:
                    To continuously DEVELOP highly competent and innovative people that are committed
                    in providing products and services at par with global standards.
                    <br><br>
                    Corporate Social Responsibility:
                    Committed to create SAFE and environmental friendly products and to give back
                    to the community by providing employment.
                    <br><br>
                    Stakeholders:
                    To manage a profitable and sustainable GROWTH for our stakeholders.
                </p>
            </div>
        </div>
    </section>
    <section class="section bc-about1">
        <div class="container">
            <div class="row title">
                <h5><u>QUALITY POLICY</u></h5>
                <p class="policy">
                    "Nurturing" the knowledge and skills of every employee and business partner.
                    Establishing "Quality" standards in our processes to meet customers satisfaction.
                    Maintaining integrity and competitiveness in the "Management" of our day-to-day business.
                </p>
            </div>
        </div>
    </section>
@endsection
