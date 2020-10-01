@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/article1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/article2.jpg" alt="Second slide">
            </div> 
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/article3.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/article4.jpg" alt="Third slide">
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
    <br>
    <section class="page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>News Article</h3>
            </div>
        </div>
    </section>
    <section class="newsarticle">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="newsarticle-wrapper">
                        <div class="card">
                            <div class="card-header">
                                REFAMED Awarded as Distinguished Company in Feed Industry
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/rrlc/newsarticle/newsarticle1.jpg" width="200px;"></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            During the Livestock Philippines Expo 2017 held at SMX Convention Center Mall of Asia on May 24, REFAMED was awarded by the Bureau of Animal Industry (BAI) as distinguished veterinary drugs and manufacturing company with facilities certified and conforming to international standards...
                                        <a href="{{ url('/newsarticleblog')}}" class="pull-right">READ MORE</a>
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                REFAMED Participates in the 26th National Hog Convention 
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/rrlc/newsarticle/newsarticle2.png" width="200px;" height="150px;"></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            Refamed Research Laboratory Corp (REFAMED) took part in the 26th National Hog Convention and Trade Exhibits at the SMX Convention Center, Mall of Asia, Pasay City last March 30 to April 1, 2017.
                                            The theme of REFAMED’s booth for this year was “REFAMED PIGS IN SUMMER”...
                                            <a href="{{ url('/newsarticleblog1')}}" class="pull-right">READ MORE</a>
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                African Swine Fever: Confirmed in the Philippines 
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/rrlc/newsarticle/newsarticle3.jpg" width="200px;"></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            African swine fever spread rapidly in Asia last year. Outbreaks were seen in China last August 2018 and spread to Vietnam, Laos, Myanmar, Cambodia, Mongolia and North Korea. 
                                            On August 16, 2019 the Bureau of Animal Industry informed the Department of Agriculture of an increased pig mortality...
                                            <a href="{{ url('/newsarticleblog2')}}" class="pull-right">READ MORE</a>
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                REFAMED joins 2019 Philippine Poultry Show 
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/rrlc/newsarticle/newsarticle44.png" width="200px;"></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            REFAMED Research Laboratory had joined the biggest and the largest poultry event in the Philippines. The Philippine Poultry Show and Fiestag 2019 was held last August 23-25, 2019, at the SMX Convention Center, Mall of Asia, Pasay City...
                                            <a href="{{ url('/newsarticleblog3')}}" class="pull-right">READ MORE</a>
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            RELATED ARTICLE
                        </div>
                        <div class="card-body">
                           
                            <p class="card-text"><a href="#" class="pull-right">Selenium in animals</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Additives in animals</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Vitamins in animals</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Vitamins in animals</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Vitamins in animals</a> </p>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                    <a href="{{ url('/technicalservice') }}">
                            <center><img src="/images/rrlc/recheck/recheck_logo.png" width="330px;" alt=""></center>
                        </a>
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection
