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
    <section class="section rawmats-content1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <br><br><br><br>
                        Blaine Corporation is a trusted trader of raw materials and specialty ingredients
                        since 1987. It serves industries such as animal health, animal nutrition, pharmaceutical,
                        food and personal & home care.
                    </p>
                   
                </div>
                <div class="col-md-6">
                    <img src="/images/bcraw/image1.png" width="400px;" height="350px;" alt="Video">
                </div>
            </div>
        </div>
    </section>
    <section class="section bc-partners">
        <div class="container">
            <h4>Global Partners</h4>
            <hr class="hr">
            <div class="row">
                <b style="margin-left: 250px;"><img src="/images/logo/Adisseo.png" width="200px;" alt="Third slide"></b>
                <b style="margin-left: 50px;"><img src="/images/logo/Advance.png"  width="200px;" alt="Third slide"></b> 
                <b style="margin-left: 50px;"><img src="/images/logo/corel.png"  width="200px;" alt="Third slide"></b> 
            </div>
            <div class="row">
                <b style="margin-left: 360px;"><img src="/images/logo/Cleo.png"  width="190px;" alt="Third slide"></b>
                <b style="margin-left: 50px;"><img src="/images/logo/Fruita.jpg"  width="200px;" alt="Third slide"></b> 
            </div>
        </div>
    </section>
@endsection
