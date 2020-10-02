@extends('layouts.bcgroupapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img3.png" alt="Third slide">
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
    <section class="section bc-content1">
        <div class="container">
            <div class="bc-content1-wrapper">
                <div class="card">
                    <h3>MISSION AND VISION</h3>
                    <p>To be the leading provider of quality products and services in Animal Health</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
                <div class="card">
                    <h3>WHAT WE DO</h3>
                    <p>Diverse industries prefer our products, services and expertise.</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
                <div class="card">
                    <h3>OUR STORY</h3>
                    <p>From humble beginnings to great heights. This is the story of Blaine Corporation.</p>
                    <center><a class="btn"  href="#">READ MORE</a></center>
                </div>
            </div>
        </div>
    </section>
    <section class="section bc-content2">
        <div class="container">
            <h3>CERTIFICATIONS</h3>
            <p>Our products and services are given approval of quality and trusts with these certifications making us globally competitive.
            </p>
            <hr class="hr">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/certification/iso.png" width="180px;" >
                    </div>
                    <div class="col-md-4">
                        <img src="/images/certification/image1.png" width="200px;" height="150px;">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/certification/fda.png" width="350px;"  >
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="section bc-csr">
        <div class="container">
            <h3>CORPORATE SOCIAL RESPONSIBILITY</h3>
            <hr class="hr">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PRINCIPLES</h5>
                            <p class="card-text">
                                Blaine Corporation believes that it is their mission to provide safe products
                                and to create employment and business [...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">NQM FOUNDATION</h5>
                          <p class="card-text">
                              The Blaine Group of Companies hopes to give back to the community through the 
                              NQM Life Foundation. Inc. to fulfill its [...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/CSR-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">BENEFICIARIES</h5>
                            <p class="card-text">
                                The NQM Life Foundation. Inc. is helping deserving children go to school
                                with less to worry about.
                                <br>[...]
                            </p>
                          <a href="#" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="section bc-careeropp">
        <div class="container">
            <h3>CAREER OPPORTUNITIES</h3>
            <hr class="hr">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="control-label" for="name">Name (Required)</label>
                            <div>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">Email (Required)</label>
                            <div >
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="control-label" for="telephone_mobile_number"></label>
                            </div>
                            <select class="form-control" name="#" id="">
                              <option value="#">Sales and Marketing</option>
                              <option value="#">Quality Management</option>
                              <option value="#">Production Operation</option>
                              <option value="#">Finance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="file">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div>
                                <input class="btn btn-light" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <img src="/images/bc/image4.png" width="500px;" height="300px;" alt="Video">
                </div>
            </div>
        </div>
    </section>

    <section class="section bc-newsarticle">
        <div class="container">
            <h3>NEWS</h3>
            <hr class="hr">
            <img src="/images/bc/image1.jpg" width="1000px;" alt="Video">
            <h5>Blaine Leaders Undergo Professional Image and Executive Coaching</h5>
            <p>Olen-ified – a term coined by Ms. Olen Juarez-Lim for the 25 managers of Blaine Group of Companies who rose up to the challenge of her thorough scrutiny and critique in terms of appearance and decorum aligning it to BLAINE’s goal for a more improved and professionalized company image. This was done through a 2-day Executive Presence Seminar last December 18 – 19 at Discovery Primea Hotel, Makati City.
            </p>
            <p>For this seminar conducted by Ms. Olen Juarez-Lim of OJL Consulting, managers aim to achieve professional and business success by providing clarity on life goals and increasing leadership impact. The two-day seminar tackled comprehensively the different components of business presence such as proper attire, grooming, posture, demeanor, business accessories, and communication and etiquette skills. Participants were also taught to outclass the competition by learning appropriate dining skills that can be used during business entertaining.
            </p>
            <p>Ms. Olen Juarez-Lim, popularly known as Ms. O, is a former model who ventured into image consultancy with clients like GMA Public Affairs specifically, Jessica Soho. She is the most sought-after resource person on topics dealing with etiquette, health, beauty, fitness, and image management. All managers of Blaine were privileged to experience this executive coaching that hones their business acumen and executive presence. Blaine Management is aggressively investing on this kind of trainings for all employees all year round.</p>
            <br>
            <img src="/images/bc/image2.jpg" width="1000px;" alt="Video">
            <h5>Blaine Family Day 2017: A Day of Fun for the Whole Family this Christmas</h5>
            <p>
                A festive “Trolls”-themed Blaine Family Day was held last December 16 to celebrate Christmas at Blaine Industrial Complex. The said event was organized by Blaine to promote camaraderie and oneness among its employees and their respective families.
            </p>
            <p>
                All employees especially their children were advised to wear colorful costumes based on the famous cartoon movie ”Trolls”. The Management came up with a contest for Best Family Trolls Costume with a whopping Php 15,000 as grand prize while Php10,000, Php 5,000 and Php 3,000 are for 2nd, 3rd and 4th place respectively. Consolation prize for those shortlisted families in costume was Php 2,000.
            </p>
            <p>
                The celebration started with a holy mass officiated by Fr. JM Pura of St. Gaspar Parish Carmona. After the mass, the seminarians serenaded everyone with Christmas carols. While waiting for the program to start, children enjoyed various booths like cotton candy, candy bar, ice cream booth and inflatable playground.
                After the sumptuous meal, 15 families and 10 employees who were eyeing the Grand Prize for the Best Trolls Costume paraded their costumes around the party area for all the employees to see and appreciate. This was followed by children games such as Bring me, What’s in the bag?, Longest Breath – “Maligayang Pasko”, “ Button, button, who’s got the button?” and “Pera o Bayong”. Adults also got to play and have fun with the Minute to Win it challenges, inspired by a famous TV game show.
            </p>
            <p>
                The winner for Best Trolls costume (Single Category) was Sunshine Estrada (Customer Service) while for the Family Category, the winners were: 3rd Place (Larry Vicente-Accounting); 2nd Place (Jon Polanco- Accounting) and 1st Place (LA Amador- Refamed Sales). All shortlisted family for the best in costume received consolation prize of Php 2,000 each.
                The highlight of Blaine Family Day was the gift-giving as children of all Blaine employees received loot bags filled with lots of toys and goodies and there were also great raffle prizes such as washing machine, flat TV Screen, rice cooker, gift checks and a lot more for the employees.
            </p>
            <br>
            <img src="/images/bc/image3.jpg" width="1000px;" alt="Video">
            <h5>Blaine Corporation Celebrates 30th Anniversary</h5>
            <p>
                To mark the 30th anniversary of Blaine Corporation, its owners, employees, and key business partners came together at the Grand Ballroom of The Palms Country Club in Alabang last February 8, 2017 and celebrated its accomplishments and successes.   
            </p>
            <p>
                During the celebration, the company recognized the people behind its accomplishments, and awarded employees who have served the company for more than 10 years. Each awardee received a certificate and a cash gift.
                The employees also organized a surprise segment to give thanks to, and recognize the outstanding leadership and immeasurable sacrifices of, its dearly loved CEO and founder, Ms. Nema Macatugob.
            </p>
            <p>
                The celebration was capped by a surprise performance by celebrity comediennes, Super Tekla and Donita Nose of Wowowin.  The whole night was filled with laughter, great food, and merriment.
                Blaine Corporation is a globally competitive company specializes in the global sourcing of raw materials for animal health, animal nutrition, food, and personal care.
            </p>
        </div>
    </section>   
    <section class="section">
        <div class="container">
            <center>
                <div style="width: 1100px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </center>
        </div>
    </section>
   

    <section class="section bc-contactus">
        <div class="container container1">
            <div class="row">
                <div class="col-md-6">
                    <h3>Send Us a Message</h3>
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Name (Required)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">Email (Required)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label" for="message">Your Message (Required)</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <input class="btn btn-primary" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <div class="row">
                        <div class="col-md-2">
                            <br>
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Main Office:Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Tel. Nos.:+632 584 4256 to 60</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <br>
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <p>Customer Service:+632 584 4256 to 60 Email:refamed_info@blainegroup.com.ph</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
@endsection
