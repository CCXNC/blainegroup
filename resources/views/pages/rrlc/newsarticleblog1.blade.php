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
                                <h3>REFAMED Participates in the 26th National Hog Convention </h3>
                                <span>Related acticle written by Animal Nutrition team, On Sept-18-2020 10:47:09</span>
                            </div>
                            <br>
                            <center><img src="/images/rrlc/newsarticle/newsarticle2.png" width="650px;" height="350px"></center>
                            <br>
                            <p>
                                Refamed Research Laboratory Corp (REFAMED) took part in the 26th National Hog Convention and Trade Exhibits at the SMX Convention Center, Mall of Asia, Pasay City last March 30 to April 1, 2017.
                            </p>
                            <p>
                                The theme of REFAMED’s booth for this year was “REFAMED PIGS IN SUMMER”--riding on a very timely period and warmest season of the year, Summer. REFAMED came up with this theme to raise awareness to its clients and consumers that summer means excessive heat for animals, thus they’re more prone to dehydration and stress that can affect their feed intake and health resistance. Refamed as an innovative solution provider in animal health and nutrition, has a wide range of products like liquid methionine (Rhodimet AT88), oral solutions, vitamin-mineral premixes (Refavit & Refamin), probiotic (Alterion) and organic selenium (Selisseo) that can help farmers and business men during this challenging time. Aside from the fascinating booth design, Refamed team also prepared exciting gimmicks like engaging games, serving of complimentary fruit juices and giveaways.
                            </p>
                            <p>
                                For this year, the convention focused on its group’s tagline of “Change is Now, Pinoy Pork Wow na Wow!” which emphasized on how the stakeholders of the hog industry can work together to strengthen, protect and promote the local pork industry.The Hog Convention is an annual exhibition jointly organized by the Pork Producers Federation of the Philippines, Inc. (ProPork) headed by Eliseo S. Yu and National Federation of Hog Farmers, Inc. (NFHFI) headed by Chester Warren Y. Tan. This event specifically targets commercial and backyard pork producers from all over the country. It features live hog exhibits, latest veterinary products, innovative equipment and various seminars on hog raising. It is also a venue for the pork producers and hog raisers to share their experiences, tips and to learn from each other.
                                The venue for next year’s convention is in Cagayan De Oro and this will be in partnership with North Mindanao Hog Raisers Association (NorMinHog).
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
