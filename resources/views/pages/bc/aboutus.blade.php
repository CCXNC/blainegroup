@extends('layouts.bcgroupapp')

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
    <br>
    <section class="bc-page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>About Us</h3>
            </div>
        </div>
    </section>
    <section class="section bc-about1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/bc/image5.jpg" width="500px;" height="350px;" alt="Video">
                </div>
                <div class="col-md-6">
                    <h3><u>THE VISION</u></h3>
                    <p>
                        To be the leading provider of quality products and services in Animal Health and Nutrition, Food, Personal, and Home Care Industries.
                    </p>
                    <h3><u>THE MISSION</u></h3>
                    <p>
                        <b>Customer:</b> 
                        To consistently deliver VALUE to customers.
                        <br><br>
                        <b> People:</b>
                        To continuously DEVELOP highly competent and innovative people that are committed
                        in providing products and services at par with global standards.
                        <br><br>
                        <b>Corporate Social Responsibility:</b> 
                        Committed to create SAFE and environmental friendly products and to give back
                        to the community by providing employment.
                        <br><br>
                        <b>Stakeholders:</b> 
                        To manage a profitable and sustainable GROWTH for our stakeholders.
                    </p>
                </div>
                <div>
                    <h3><u>QUALITY POLICY</u></h3>
                    <p>
                    “Nurturing” the knowledge and skills of every employee and business partner. Establishing “Quality” standards in our processes to meet customers’ satisfaction. Maintaining integrity and competitiveness in the “Management” of our day-to-day business.
                    </p>
                </div>
            </div>
            <div class="card">
                <i>“Innovation, Diversification, and Expansion are crucial in the sustainability of the business.”</i>
                <b>Nema Macatugob</b>
                <i> President/CEO</i>
            </div>
        </div>
    </section>
@endsection
