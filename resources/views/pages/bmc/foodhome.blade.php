@extends('layouts.bmcfoodapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade bmcfood" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/bmcfood/Carousel2.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-2">
                        <h3><i>BLOG</i></h3>
                        <h5>Food Division</h5>
                        <p class="col-md-4">Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent2 btn-rounded2 btn-large2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/bmcfood/Carousel1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-2">
                        <h3><i>VLOG</i></h3>
                        <h5>Food Division</h5>
                        <p class="col-md-4">Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent2 btn-rounded2 btn-large2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/bmcfood/Carousel3.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-2">
                        <h3><i>NEWS AND MARKETING UPDATES</i></h3>
                        <h5>Food Division</h5>
                        <p class="col-md-4">Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent2 btn-rounded2 btn-large2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/bmcfood/Carousel4.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-2">
                        <h3><i>RETAIL</i></h3>
                        <h5>Food Division</h5>
                        <p class="col-md-4">Blaine Manufacturing Corporation - Personal Home Care   (BMC-PHC) is a 100% Filipino-owned company established in 2008, 
                            with a vision to be the business partner of choice in the field of personal care, cosmetics, and home care.</p>
                        <a href="#" class="btn btn-transparent2 btn-rounded2 btn-large2">Read More</a>
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
    <section class="page-title-bmcfood">
        <div class="container">
            <div class="col-md-12">
                <h3>Contact Us</h3>
            </div>
        </div>
    </section>
    <section class="section bmcfood-contactus">
        <div class="container container1">
            <div class="row">
                <div class="col-md-6">
                    <h3>Send Us a Message</h3>
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Name (Required)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Email (Required)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label" for="message">Your Message (Required)</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <input class="btn btn-primary" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <div class="row">
                        <div class="col-md-2">
                            <br>
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Main Office:Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Tel. Nos.:+632 584 4256 to 60</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <br>
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Customer Service:+632 584 4256 to 60 Email:bmcfood_info@blainegroup.com.ph</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section> 
@endsection    