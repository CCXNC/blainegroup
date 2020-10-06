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
    <section class="section bc-content1">
        <div class="container">
            <div class="bc-content1-wrapper">
                <div class="card">
                    <h3>MISSION AND VISION</h3>
                    <p>To be the leading provider of quality products and services in Animal Health</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
                <div class="card">
                    <h3>WHAT WE DO</h3>
                    <p>Diverse industries prefer our products, services and expertise.</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
                <div class="card">
                    <h3>OUR STORY</h3>
                    <p>From humble beginnings to great heights. This is the story of Blaine Corporation.</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
            </div>
        </div>
    </section>
    <section class="section bc-content2">
        <div class="container">
            <h3>CERTIFICATIONS</h3>
            <p>Our products and services are given approval of quality and trusts with these certifications making us globally competitive.
            </p>
            <hr class="hr">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/certification/iso.png" width="180px;" >
                    </div>
                    <div class="col-md-4">
                        <img src="/images/certification/image1.png" width="200px;" height="150px;">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/certification/fda.png" width="350px;"  >
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="section bc-csr">
        <div class="container">
            <h3>CORPORATE SOCIAL RESPONSIBILITY</h3>
            <hr class="hr">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PRINCIPLES</h5>
                            <p class="card-text">
                                Blaine Corporation believes that it is their mission to provide safe products
                                and to create employment and business [...]
                            </p>
                          <a href="#" class="btn">READ MORE</a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">NQM FOUNDATION</h5>
                          <p class="card-text">
                              The Blaine Group of Companies hopes to give back to the community through the 
                              NQM Life Foundation. Inc. to fulfill its [...]
                            </p>
                          <a href="#" class="btn">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">BENEFICIARIES</h5>
                            <p class="card-text">
                                The NQM Life Foundation. Inc. is helping deserving children go to school
                                with less to worry about.
                                [...]
                            </p>
                          <a href="#" class="btn">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bc-contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Send Us a Message</h4>
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label" for="message">Your Message</label>
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
                            <p>Customer Service:+632 584 4256 to 60 Email:bc_info@blainegroup.com.ph</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
@endsection
