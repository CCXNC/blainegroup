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
                <img class="d-block w-100" src="/images/rrlc/newsarticle/newsarticle2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/newsarticle/newsarticle1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/newsarticle/newsarticle3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/rrlc/newsarticle/newsarticle4.png" alt="Third slide">
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
    <section class="newsarticleblog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="newsarticleblog-wrapper">
                        <div class="card">
                            <div class="bg-color">
                                <h3> REFAMED joins 2019 Philippine Poultry Show </h3>
                                <span>Related acticle written by Animal Nutrition team, On Sept-18-2020 10:47:09</span>
                            </div>
                            <br>
                            <center><img src="/images/rrlc/newsarticle/newsarticle1.jpg" width="650px;" height="350px"></center>
                            <br>
                            <p>
                                REFAMED Research Laboratory had joined the biggest and the largest poultry event in the Philippines. The Philippine Poultry Show and Fiestag 2019 was held last August 23-25, 2019, at the SMX Convention Center, Mall of Asia, Pasay City.                                 </p>
                            <p>
                                The three-day event features exhibits from feed products, equipment, animal health products, and gamefowl supplies. This is organized by the National Federation of Egg Producers,  International Federation of Gamefowl Breeders, Associations, Inc (FIGBA) and the United Broiler Raisers Associations (UBRA). It is participated by stakeholders, consultants and gamefowl enthusiasts.
                            </p>
                            <p>
                                REFAMED has been supportive of these events for several years now. This event showcased REFAMED’s products that will provide improvement in production as well as in animal health.
                            </p>
                        </div>
                        <section class="section content-5">
                            <div class="container container1">
                                <h3>Share your thoughts about this post</h3>
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
                        </section> 
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
                        <div class="card-body">
                            <h5>The wait is finally over</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem accusantium repellat numquam perspiciatis consectetur.</p>
                            <center><img src="/images/products/prod1.jpg" width="200px;"></center>
                            <br>
                            <h5>Specification</h5>
                            <ul>
                                <li>typesetting industry</li>
                                <li>typesetting industry</li>
                                <li>typesetting industry</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque itaque culpa, ratione repellat alias, quod deserunt repellendus exercitationem numquam, odit reiciendis doloribus. Itaque, in adipisci voluptas nam rem possimus excepturi id, maiores porro suscipit labore distinctio dolor praesentium ad nemo quo, odio saepe repellat qui similique tenetur ipsum nihil! Aspernatur.</p>
                            <div>
                                <h3>Comment</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/user1.png" width="100px;">  </h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="font-size:12px;">Patrick Shan</h5>
                                        <span style="font-size:10px;">Sept-18-2020 11:17:25</span>
                                        <p style="font-size:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam nulla, iusto nam ad doloremque? Maiores ipsa laboriosam provident ex.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/user3.png" width="100px;">  </h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="font-size:12px;">Melanie Ching</h5>
                                        <span style="font-size:10px;">Sept-18-2020 11:17:25</span>
                                        <p style="font-size:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam nulla, iusto nam ad doloremque? Maiores ipsa laboriosam provident ex.</p>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5><img src="/images/user2.png" width="100px;">  </h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="font-size:12px;">John Web</h5>
                                        <span style="font-size:10px;">Sept-18-2020 11:17:25</span>
                                        <p style="font-size:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam nulla, iusto nam ad doloremque? Maiores ipsa laboriosam provident ex.</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
@endsection
