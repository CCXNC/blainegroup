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
    <section class="section rawmats-content2">
        <div class="container">
            <h3>OUR STORY</h3>
            <hr class="hr">
            <img src="images/bcstory/story.png" alt="">
            <p>
                Blaine Marketing Corporation became the exclusive distributor of the French-based multinational company Rhone-Poulenc Animal Nutrition back in 1998. From thereon, Blaine continued to grow, venturing into manufacturing and distribution of animal nutrition products, as well as raw materials for food and personal care.
                <br><br>
                Later on, the company changed its name into Blaine Corporation Raw Materials.
            </p>
        </div>
    </section>
    <section class="rawmats-content3">
        <div class="container">
            <div class="header">
                <div class="col-md-12"> 
                    <h3>Address</h3>
                    <hr class="hr">
                </div>    
                <div class="col-md-8">    
                    <h5>Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</h5>
                </div>
            </div>
            <br>
            <center>
                <div style="width: 1100px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </center>
            <br>
        </div>
    </section>
@endsection
