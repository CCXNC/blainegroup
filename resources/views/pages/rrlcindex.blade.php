@extends('layouts.rrlcapp')

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
    <section class="section content-3">
        <div class="container">
            <h2>We are Certified Company</h2>
            <p>We prioritized safety and quality products for you!</p>
            <hr class="hr">
            <div class="content-3-wrapper">
                <div class="card">
                    <h3><img src="/images/certification/iso.png" width="120px;"></h3>
                    <h5>ISO 9001:2015 Certified (SGS)</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/certification/halal-logo.jpg" width="120px;"></h3>
                    <h5>Certificate of Current Good Manufacturing Practice</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/certification/fda.png" width="230px;"></h3>
                    <h5>Halal Certified Powder Line (IDCP) Certificate of Current Good Manufacturing Practice</h5>
                </div>
                <div class="card">
                    <h3><img src="/images/certification/halal-logo.jpg" width="120px;"></h3>
                    <h5>Certificate of Current Good Manufacturing Practice</h5>
                </div>
            </div>
        </div>
    </section> 
    <section class="section content-4">
        <div class="container">
            <h2>OFFERED SERVICES</h2>
            <hr class="hr">
            <div class="content-4-wrapper">
                <div class="card">
                    <h3><img src="/images/offeredservice/sample1.jpg" width="120px;"></h3>
                    <h5>Animal Nutrition</h5>
                    <ul>
                        <li>Basemix</li>
                        <li>Vitamin Premix</li>
                        <li>Mineral Premix</li>
                        <li>Branded Additives</li>
                    </ul>
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample3.jpg" width="120px;"></h3>
                    <h5>Animal Health</h5>
                    <ul>
                        <li>Antibiotics</li>
                        <li>Anti-infectives</li>
                        <li>Vitamins</li>
                        <li>Minerals</li>
                        <li>Disinfectants</li>
                    </ul>    
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample4.png" width="150px;"></h3>
                    <h5>Tolling</h5>
                    <ul>
                        <li>Premixes</li>
                        <li>Liquid Solution</li>
                        <li>Water Solubles</li>
                        <li>Repacking</li>
                    </ul>    
                </div>
                <div class="card">
                    <h3><img src="/images/offeredservice/sample3.jpg" width="120px;"></h3>
                    <h5>Animal Nutrition</h5>
                    <ul>
                        <li>Basemix</li>
                        <li>Vitamin Premix</li>
                        <li>Mineral Premix</li>
                        <li>Branded Additives</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 
    <section class="section content-5">
        <div class="container">
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
            <div class="container">
                <div class="col-md-7">
                    <hr>
                    <p><span class="fa fa-map-marker">&nbsp;</span><span>Main Office:</span>Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</p>
                    <p><span class="fa fa-phone">&nbsp;</span><span>Tel. Nos.:</span>+63 2584 4256 to 60</p>
                    <p><span class="fa fa-envelope">&nbsp;</span><span>Customer Service:</span>+63 2584 4256 to 60 <span>Email:</span>refamed_info@blainegroup.com.ph</p>
                </div>
            </div>
        </div>
    </section>
@endsection
