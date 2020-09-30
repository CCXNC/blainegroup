@extends('layouts.bcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel/img1.jpg" alt="First slide">
            </div>
        </div>
    </div>
    <section class="section rawmats-content1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <br><br><br>
                        Blaine Corporation is a trusted trader of raw materials and specialty ingredients
                        since 1987. It serves industries such as animal health, animal nutrition, pharmaceutical,
                        food and personal & home care.
                    </p>
                   
                </div>
                <div class="col-md-6">
                    <img src="/images/blank.png" width="400px;" alt="Video">
                </div>
            </div>
        </div>
    </section>
    <section class="section bc-partners">
        <div class="container">
            <h2>Global Partners</h2>
            <p style="color:red;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, fugiat?</p>
            <hr class="hr">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="d-block w-100" src="/images/logo/Adisseo.png" alt="Third slide">
                            <p class="card-text" style="color:red">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="d-block w-100" src="/images/logo/Advance.png" alt="Third slide">
                            <p class="card-text" style="color:red">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="d-block w-100" src="/images/logo/corel.png" alt="Third slide">
                            <br><br>
                            <p class="card-text" style="color:red">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bc-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="d-block w-100" src="/images/logo/Cleo.png" alt="Third slide">
                            <br><br>
                            <p class="card-text" style="color:red">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="d-block w-100" src="/images/logo/Fruita.jpg" alt="Third slide">
                            <p class="card-text" style="color:red">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
