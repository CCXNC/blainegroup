@extends('layouts.bmcpahdapp')

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
    </section>  
    <div id="parallax-world-of-ugg">
      
        <section>
            <div class="block">
                <h2 class="bmc-pc2">Blaine Personal and Home Care Corporation</h2>
                <p>BPHCC has come a long way in terms of improving its processes 
                  through equipment upgrade and personnel training. It tied up 
                  with partners known locally and abroad to design state-of-the-art 
                  machinery for its manufacturing plant. Its competent team of 
                  young and talented individuals are pouring their efforts into 
                  R&D activities and in tapping suppliers of the finest raw 
                  materials across the globe.</p>
                <p class="margin-top-10" style="font-style: italic"><b>All of these are driven to one goal of
                    bringing quality products and value for money to clients.</b> 
                </p>
            </div>
        </section>

        <section>
            <div class="parallax-one">
                <div class="col-md-6" class="bmc-pc3">
                    <h3 style="text-align: left; color:white; padding-left:15px" class="text-opacity">Blaine intensifies expansion to respond to the growing demand of food industry.</h3>
                    <p style="text-align: left; color:white; padding-left:15px">Blaine Corporation established its personal and home care division in 2009 to 
                            cater to the basic cleaning care needs of its employees, manufacturing facilities and existing clients. 
                            The division expanded into a toller, trader and manufacturer of personal and home care products of 
                            various reputable companies.<br><br>
                            In 2018, Blaine Manufacturing Corporation was formed. Resources and capabilities of Blaine Food Corporation 
                            and Blaine Personal and Home Care Corporation were consolidated to respond to the growing market demand.
                    </p>
                </div>
            </div>
        </section>
        
        <section>
            <div class="parallax-two">
                <div class="col-md-6" style="float: right;">
                    <h2 style="text-align: left; color:white;">Blaine Manufacturing Corporation is committed to safety and quality.</h2>
                    <p style="text-align:left; color:white;">Blaine complies and upholds the highest standards of quality and safety management. 
                    The company is certified by local and international regulatory body:
                    <br><br>
                    • License to Operate (LTO) as Cosmetic Manufacturer
                    <br>
                    • License to Operate (LTO) as Drug Manufacturer
                    <br>
                    • FDA certified for Good Manufacturing Practices
                    <br>
                    • Certified for Halal Plant Accreditation</p>
                </div>
            </div>
        </section>
        </div>  
@endsection    