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

    <section class="section bc-aboutus">
        <div class="container">
            <h2>CORPORATE SOCIAL RESPONSIBILITY</h2>
            <hr class="hr">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/blank.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PRINCIPLES</h5>
                            <p class="card-text">
                                Blaine Corporation believes that it is their mission to provide safe products
                                and to create employment and business [...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/blank.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">NQM FOUNDATION</h5>
                          <p class="card-text">
                              The Blaine Group of Companies hopes to give back to the community through the 
                              NQM Life Foundation. Inc. to fulfill its [...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/blank.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">BENEFICIARIES</h5>
                            <p class="card-text">
                                The NQM Life Foundation. Inc. is helping deserving children go to school
                                with less to worry about.
                                <br>[...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="section bc-careeropp">
        <div class="container">
            <h3>CAREER OPPORTUNITIES</h3>
            <hr class="hr">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/blank.png" width="400px;" alt="Video">
                </div>
                <div class="col-md-6">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto accusantium, sapiente rerum blanditiis praesentium molestiae perspiciatis quis explicabo? Perspiciatis, officiis harum. Odio, eum? Nemo ut architecto qui laboriosam et numquam vel soluta quis quas voluptatibus. Rerum officia magnam tempore.</p>
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, unde. Tempore, voluptatibus aliquam odit laborum earum ipsa ipsum maxime culpa labore excepturi perferendis architecto hic veritatis dignissimos exercitationem molestias qui maiores at obcaecati fugiat. Sit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bc-newsarticle">
        <div class="container">
            <h3>NEWS ARTICLE</h3>
            <hr class="hr">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto accusantium, sapiente rerum blanditiis praesentium molestiae perspiciatis quis explicabo? Perspiciatis, officiis harum. Odio, eum? Nemo ut architecto qui laboriosam et numquam vel soluta quis quas voluptatibus. Rerum officia magnam tempore.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, unde. Tempore, voluptatibus aliquam odit laborum earum ipsa ipsum maxime culpa labore excepturi perferendis architecto hic veritatis dignissimos exercitationem molestias qui maiores at obcaecati fugiat. Sit.</p>
                 </div>
                <div class="col-md-6">
                    <img src="/images/blank.png" width="400px;" alt="Video">
                </div>
            </div>
        </div>
    </section>

    <center>
        <div style="width: 1100px; height: 500px;">
            {!! Mapper::render() !!}
        </div>
    </center>

    <section class="section bc-contactus">
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
