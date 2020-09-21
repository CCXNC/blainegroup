@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel1/header6.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header7.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header1.jpg" alt="Third slide">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="200px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, esse adipisci velit consequuntur optio laudantium quae ullam nesciunt pariatur doloremque totam suscipit voluptatem! Quis mollitia ad, qui quas alias facere!
                                        <a href="#" class="pull-right">READ MORE</a>
                                    </p>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="200px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi atque aut vitae magnam similique. Ipsa dolorem soluta id sint aut molestiae harum quos inventore necessitatibus commodi ullam hic, non dolorum.
                                        <a href="#" class="pull-right">READ MORE</a>
                                    </p>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="200px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet assumenda similique cupiditate, quasi neque? Natus recusandae aut quia cupiditate, consectetur voluptas consequuntur expedita dignissimos laboriosam veniam deleniti ullam aliquid?
                                        <a href="#" class="pull-right">READ MORE</a>
                                    </p>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="200px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut velit expedita nesciunt quis nam ipsam cum, sunt aspernatur esse consequuntur ipsum. Perspiciatis harum veniam recusandae saepe fugit porro eligendi mollitia.
                                        <a href="#" class="pull-right">READ MORE</a>
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            TECHNICAL BULLETIN
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus officiis provident inventore quibusdam laboriosam, consectetur aliquam, quaerat quia architecto eos quam aliquid nisi illo quas? Optio saepe necessitatibus quidem?
                                
                            </p>
                        </div>
                    </div>
                    <br>
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
                </div>
            </div>
        </div>    
    </section>
@endsection
