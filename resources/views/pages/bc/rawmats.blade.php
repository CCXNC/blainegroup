@extends('layouts.bcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/bcraw-header.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="caption-1">
                        <h3>BLAINE CORPORATION RAW MATERIALS</h3>
                        <h5><i>Catering the Filipino market with world class products</i></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <h2>Global Partners</h2>
            <hr class="hr">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img  src="/images/logo/Adisseo.png" width="200px;" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img  src="/images/logo/Advance.png"  width="200px;" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="/images/logo/corel.png"  width="200px;" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bc-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-left:180px;">
                    <div class="card">
                        <div class="card-body">
                            <img  src="/images/logo/Cleo.png"  width="190px;" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="/images/logo/Fruita.jpg"  width="200px;" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
