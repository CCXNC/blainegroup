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
                                <h3>African Swine Fever: Confirmed in the Philippines</h3>
                                <span>Related acticle written by Animal Nutrition team, On Sept-18-2020 10:47:09</span>
                            </div>
                            <br>
                            <center><img src="/images/rrlc/newsarticle/newsarticle33.jpg" width="650px;" height="350px"></center>
                            <br>
                            <p>
                                African swine fever spread rapidly in Asia last year. Outbreaks were seen in China last August 2018 and spread to Vietnam, Laos, Myanmar, Cambodia, Mongolia and North Korea.                             </p>
                            <p>
                                On August 16, 2019 the Bureau of Animal Industry informed the Department of Agriculture of an increased pig mortality reared on backyard farm in Rizal. Immediately, DA conducted an investigation and blood samples were collected, submitted to Pirbright’s reference laboratory in UK for PCR testing. 
                                Last August 19, the Central Emergency Operation Center of Taiwan imposed a stricter checks on the carry-on luggage of all Filipinos entering their country as part of their precautionary measures but Secretary Dar assures the Filipino that there is no need to cause a panic in swine industry. In his interview, he never confirmed nor denied that African Swine Fever is the cause of the increasing pig deaths in Rizal province. He will give his final statement once the confirmatory result of submitted samples arrive. 
                            </p>
                            <p>
                                After waiting for the results, on September 09, 2019, Sec Dar of Department of Agriculture announced that the samples sent from UK were PCR positive for African Swine Fever. He said that 14 of 20 samples tested positive but still need to check the virulence of the viral strain. This confirmation from Sec Dar made the Philippines as the ninth country in Asia affected by ASF after the Asian part of Russia, China, North Korea, Mongolia, Vietnam, Cambodia, Laos and Myanmar. 
                                But what is African Swine Fever really all about? Is it a zoonotic disease? Will it cause harm in humans? How is the transmission of virus? And what will be the impact in the swine industry? These are some of the questions asked during the announcement of Sec. Dar. 
                                African Swine Fever Virus is not harmful to humans but it can cause hemorrhagic fever in pigs that can lead to 100% mortality. As of today, there is NO cure and vaccine available. Implementation of strict biosecurity and cooperation of different agencies can prevent the spread of the disease. 
                                Philippine outbreaks identified in two towns Rizal and Bulacan. Authorities already culled more than 7000 pigs within a one kilometer radius from the infected area. Suspected reasons for the virus entry in the Philippines were the backyard raisers who fed “pig swill” or food scrap coming from the hotels and restaurants nearby the area. They also added that the virus could be traced up from the smuggled frozen meat and returning overseas Filipino workers who brought back the infected meat products (canned, frozen or process meat). 
                            </p>
                            <p>
                                Hog industry in the Philippines is around 260 billion worth and one of the critical industry in the Philippines. According to PSA the top three region contributes to the industry are the Central Luzon 21.72%, Calabarzon 16.03% and Central Visayas 8.38%. Despite of the confirmation from Sec Dar, Philippine authorities assured the public that they are in control of the situation by tightening quarantine checkpoints, including the airports and sea ports and imposed a strict monitoring in all smuggled imported meat to prevent disease spread. Implementation of 1-7-10 km protocol (1km for culling the animals, 7 km for the quarantine of animals and the 10 km for the surveillance of the animals in the area) the fast action and collaboration of government and private sector helps to contain the disease. 
                                “We have never been in an epidemic, just to highlight that. We are responding to the increased number of deaths of pigs,” Dar said and urged the Filipino to continuously support eating Pinoy Pork. 
                                                            <p>
                                Livestock Philippines is the Philippines' 1st International Livestock Nutrition, Health and Production and Meat Industry Expo which has developed an outstanding reputation as the Philippines' premier event for the livestock, feed milling and meat industries. 
                            </p>
                        </div>
                        <section class="section content-5">
                            <div class="container container1">
                                <h3>African Swine Fever: Confirmed in the Philippines </h3>
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
