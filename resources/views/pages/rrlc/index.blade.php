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
                <div class="col-md-6">
                    <h3 style="color:red;">Lorem ipsum dolor sit amet, conse</h3>
                    <hr class="hr">
                </div>
                <div class="col-md-6">
                    <h3 style="color:red;">Lorem ipsum dolor sit amet, conse</h3>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="info" style="color:red;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
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
                    <p class="info" style="color:red;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ab voluptatibus, perspiciatis vitae cupiditate enim cum modi commodi obcaecati aliquid. At rerum, quasi voluptas explicabo adipisci sapiente maiores vel maxime.</p>
                    <img class="d-block w-100" src="/images/content/video.png" alt="Video">
                </div>
            </div>
        </div>
    </section>
    <section class="section content-2" id="section-2">
        <div class="container">
            <h3>Our Products</h3>
            <p style="color:red;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Laudantium exercitationem consequuntur odio cumque. 
            </p>
            <hr class="hr">
            <div class="content-2-wrapper">
                <div class="card">
                    <h3><img src="/images/rrlc/primeproduct/wsp/biotrol.png" width="130px;"></h3>
                    <h5>BIOTROL</h5>
                    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/primeproduct/wsp/cetrolyteplus.png" width="130px;"></h3>
                    <h5>CETROLYTE PLUS</h5>
                    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/primeproduct/wsp/levammisole.png" width="130px;"></h3>
                    <h5>LEVAMMISOLE</h5>
                    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="card">
                    <h3><img src="/images/rrlc/primeproduct/wsp/Neocin.png" width="130px;"></h3>
                    <h5>NEOCIN</h5>
                    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section content-3">
        <div class="container">
            <h3>We are Certified Company</h3>
            <p>We prioritized safety and quality products for you!</p>
            <hr class="hr">
            <div class="content-3-wrapper">
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">ISO 9001:2015 Certified (SGS)</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Certificate of Current Good Manufacturing Practice</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Halal Certified Powder Line (IDCP) Certificate of Current Good Manufacturing Practice</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Certificate of Current Good Manufacturing Practice</h5>
                </div>
            </div>
        </div>
    </section> 
    <section class="section content-4">
        <div class="container">
            <h3>OFFERED SERVICES</h3>
            <hr class="hr">
            <div class="content-4-wrapper">
                <div class="card" >
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Animal Nutrition</h5>
                    <ul >
                        <li style="color:red;">Basemix</li>
                        <li style="color:red;">Vitamin Premix</li>
                        <li style="color:red;">Mineral Premix</li>
                        <li style="color:red;">Branded Additives</li>
                    </ul>
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Animal Health</h5>
                    <ul>
                        <li style="color:red;">Antibiotics</li>
                        <li style="color:red;">Anti-infectives</li>
                        <li style="color:red;">Vitamins</li>
                        <li style="color:red;">Minerals</li>
                        <li style="color:red;">Disinfectants</li>
                    </ul>    
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Tolling</h5>
                    <ul>
                        <li style="color:red;">Premixes</li>
                        <li style="color:red;">Liquid Solution</li>
                        <li style="color:red;">Water Solubles</li>
                        <li style="color:red;">Repacking</li>
                    </ul>    
                </div>
                <div class="card">
                    <h3><img src="/images/blank.png" width="200px;"></h3>
                    <h5 style="color:red;">Animal Nutrition</h5>
                    <ul>
                        <li style="color:red;">Basemix</li>
                        <li style="color:red;">Vitamin Premix</li>
                        <li style="color:red;">Mineral Premix</li>
                        <li style="color:red;">Branded Additives</li>
                    </ul>
                </div>
            </div>
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
