@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/123.png" alt="First slide">
            </div>
        </div>
    </div>
    <br>
    <section class="section contact-1">
        <div class="container">
            <div class="col-md-12">
                <p><span class="fa fa-map-marker">&nbsp;</span><span>Main Office:</span>Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</p>
                <p><span class="fa fa-phone">&nbsp;</span><span>Tel. Nos.:</span>+632 584 4256 to 60</p>
                <p><span class="fa fa-envelope">&nbsp;</span><span>Customer Service:</span>+632 584 4256 to 60 <span>Email:</span>refamed_info@blainegroup.com.ph</p>
            </div>
        </div>
    </section>
    

    <section class="section content-5">
        <div class="container container1">
            <h3>Send Us a Message</h3>
            <form class="form-horizontal" action="">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Name (Required)</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Email (Required)</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="telephone_mobile_number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="message">Your Message (Required)</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="message" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <input class="btn btn-primary" type="submit" value="Send Message">
                    </div>
                </div>
            </form>
    </section>           
@endsection    