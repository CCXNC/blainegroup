@extends('layouts.bcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/bcraw-header.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-1">
                        <h3>BLAINE CORPORATION <br>RAW MATERIALS</h3>
                        <br>
                        <h5><i>"Catering the Filipino market with world<br> <span style="margin-left:190px;">class products"</span> </i></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section class="bc-page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>Contact Us</h3>
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