@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlcheader.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/123.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/123.png" alt="Third slide">
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
                <div class="col-md-12">
                    <h3 style="color:red;">Lorem ipsum dolor sit amet, conse</h3>
                    <hr class="hr">
                    <video style="padding: 0;" width="800px;" height="auto;" controls>
                        <source src="{{URL::asset("/video/video1.mp4")}}" type="video/mp4">
                  </video>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-2" id="section-2">
        <div class="container">
            <h3>Our Products</h3>
            <p>REFAMED proudly presents its 3 main business catering to industry needs.
            </p>
            <hr class="hr">
            <div class="content-2-wrapper">
                <div class="card">
                    <h3><img src="/images/rrlc/homepage/image1.jpg" width="300px;"></h3>
                    <h5>REFAMED PRIME PRODUCTS </h5>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/homepage/image2.png" width="300px;"></h3>
                    <h5>REFAMED SPECIALTY PRODUCTS</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/homepage/image3.png" width="300px;"></h3>
                    <h5>TOLLING SERVICES</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-3">
        <div class="container">
            <h3>We are Certified Company</h3>
            <p>True to its vision, REFAMED, being a 100% Filipino owned company has passed these certifications making its products globally competitive.</p>
            <hr class="hr">
            <img src="/images/certification/image1.png" width="200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/images/certification/image2.png" width="180px;">
            </div>
        </div>
    </section> 
    <section class="section content-4">
        <div class="container">
            <h3>OFFERED SERVICES</h3>
            <p>Together with our in-house experts, REFAMED provides technical assistance to our farms and feedmills through our RECHECK services.
            </p>
            <hr class="hr">
            <img src="/images/rrlc/homepage/image4.png" width="1000px;" height="300px;" alt="">
        </div>
    </section> 
    <section class="section content-5">
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
                            <p>Customer Service:+632 584 4256 to 60 Email:refamed_info@blainegroup.com.ph</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>              
@endsection
