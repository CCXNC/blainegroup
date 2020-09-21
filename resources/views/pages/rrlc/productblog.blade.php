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
    <section class="productblog-1">
        <div class="container">
            <div class="col-md-12">
                <h3>Cetrolyte</h3>
                <p>Category: Oral Solutions & written by Animal health team On January 26, 2020 07:52:09</p>
            </div>
        </div>
    </section>
    <section class="productblog-2">
        <div class="container">
            <div class="col-md-12">
                <h3>INDICATIONS:</h3>
                <p>To prevent dehydration and promotes Body resistance against infectious diseases especially 
                    during periods of stress (abrupt weather changes, extreme temperatures, vaccination,
                    beak trimming, transfer, molting & diseases outbreaks).</p>
                <p class="list">
                    - For improvement and maintenance of overall production performance.
                </p>
                <p class="list">
                    - As an aid in the treatment & prevention of diarrhea/scouring. 
                </p>
                <p class="list">
                    - As nutritional supplement in brooding, sick and recovering animals. 
                </p>
            </div>
        </div>
    </section>
    <section class="productblog-3">
        <div class="container">
            <div class="col-md-12">
                <h3>The wait is finally over</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ducimus nobis, 
                    qui id error quisquam est totam modi, non exercitationem ullam eaque facilis porro nesciunt sapiente quasi architecto. Distinctio, alias?
                </p>
            </div>
        </div>
    </section>
    <section class="productblog-4">
        <div class="container">
            <div class="keminproduct-wrapper">
                <div class="card">
                    <h3><img src="/images/productblog/prod6.jpg" width="300px;" height="300px"></h3>
                    <div class="col-md-12">
                        <h3 class="spec">Specification</h3>
                        <p class="info-1"> • typesetting industry</p>
                        <p class="info-1"> • typesetting industry</p>
                        <p class="info-1"> • typesetting industry</p>
                    </div>
                    <div class="col-md-12">
                        <p class="info-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iure obcaecati dolorum quibusdam quos eum fuga natus explicabo laborum assumenda hic,
                            aperiam nobis odit delectus, cupiditate eaque deserunt quidem doloremque eos.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati laboriosam 
                            repudiandae doloribus provident! Eveniet accusantium sunt quis, at voluptas odio, 
                            assumenda in nostrum dolorem natus ex error est ab architecto. Lorem ipsum, dolor 
                            sit amet consectetur adipisicing elit. Ab dolorem molestiae quasi unde vitae harum, 
                            ipsam saepe! Vel eligendi qui facere illum atque repellat nesciunt labore 
                            asperiores reiciendis! Explicabo, nobis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="productblog-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            RELATED ARTICLE
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="180px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <h4>Heat Stress in pigs</h4>
                                    <p>January 26, 2021 07:52:09</p>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><img src="/images/blank.png" width="180px;">  </h5>
                                </div>
                                <div class="col-md-8">
                                    <h4>Supplementation in poultry</h4>
                                    <p>January 26, 2021 07:52:09</p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            CATEGORIES
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a href="#" class="pull-right">Water Soluble Products</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Oral Solution</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Disinfectant</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">Nutraceuticals</a> </p>
                            <p class="card-text"><a href="#" class="pull-right">AB Premix</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection
