@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/rrlc/primeproduct/image4.png" alt="First slide">
            </div>
        </div>
    </div>
    <br>
    <section class="page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>OUR PRODUCTS</h3>
            </div>
        </div>
    </section>
    <section class="section rrlcproductlist">
        <div class="container">
            <h3>WATER SOLUBLE POWDER</h3>
            <hr class="hr">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <b> PRODUCT LISTINGS</b>
                        <b style="margin-left:30px;">REFAMED PRIME PRODUCTS</b>
                        <div style="margin-left:80px;">
                            <b>Water Soluble Powder</b> 
                            <ul>
                                <li>AMOXIN</li>
                                <li>BIOTROL</li>
                                <li>CETROLYTE</li>
                            </ul>
                            <b>Oral Solution</b> 
                            <ul>
                                <li>CETROLYTE</li>
                                <li>REFLOX</li>
                            </ul>
                            <b>Disinfectant</b> 
                            <ul>
                                <li>SAUBER PRO</li>
                                <li>SAUBER SURE</li>
                                <li>OPTIODINE</li>
                            </ul>
                            <b>PREMIXES</b> 
                            <ul>
                                <li>DIMETICOL PRO</li>
                                <li>REFAVIT</li>
                                <li>REFAMIN</li>
                            </ul>
                            <b>NUTRACEUTICALS</b> 
                            <ul>
                                <li>OSTEO PLUS</li>
                                <li>IMMUNOSORB</li>
                            </ul>
                        </div>
                        <b style="margin-left:30px;">REFAMED SPECIALTY PRODUCTS</b>
                        <div style="margin-left:80px;">
                            <b>ADISSEO</b>
                            <ul>
                                <li>ALTERION</li>
                                <li>KEMIN</li>
                                <li>TOXFIN</li>
                            </ul>
                            <b>KEMIN</b>
                            <ul>
                                <li>TOXFIN</li>
                            </ul>
                            <b>CANADIAN BIOSYSTEM</b>
                            <ul>
                                <li>PHYTASE</li>
                            </ul> 
                        </div>    
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <a data-toggle="modal" data-target="#exampleModalCenter">
                                    <h3><img src="/images/rrlc/primeproduct/rpp1.png" width="130px;"></h3>
                                    <h5>AMOXIN</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <a data-toggle="modal" data-target="#exampleModalCenter">
                                    <h3><img src="/images/rrlc/primeproduct/rpp2.png" width="130px;"></h3>
                                    <h5>BIOTROL</h5>
                                </a>    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <a data-toggle="modal" data-target="#exampleModalCenter">
                                    <h3><img src="/images/rrlc/primeproduct/rpp3.png" width="130px;"></h3>
                                    <h5>CETROLYTE</h5>
                                </a>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h3><img src="/images/rrlc/primeproduct/wsp/biotrol.png" width="130px;"></h3>
                                <h5>BIOTROL</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h3><img src="/images/rrlc/primeproduct/wsp/cetrolyteplus.png" width="130px;"></h3>
                                <h5>CETROLYTE PLUS</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h3><img src="/images/rrlc/primeproduct/wsp/levammisole.png" width="130px;"></h3>
                                <h5>LEVAMMISOLE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h3><img src="/images/rrlc/primeproduct/wsp/Neocin.png" width="130px;"></h3>
                                <h5>NEOCIN</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h3><img src="/images/rrlc/primeproduct/wsp/levammisole.png" width="130px;"></h3>
                                <h5>LEVAMMISOLE</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="col-12">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <center><img src="/images/rrlc/primeproduct/rpp1.png" width="250px;"></center>
                        </div>
                        <div class="col-4 col-sm-6">
                            <b class="head">Amoxin</b>   
                            <p>
                                Prevention and treatment of colibacillosis/ colisepticemia, RTI, e.g. pneumonia and bronchitis, GI infections, bacterial enteritis, UTI, nephritis, cystitis, and mastitis, metritis and agalactia syndrome in sows.
                            </p>
                            <p><b>Dosage: </b> </p>
                            <p>
                                Poultry: 2-3 g/L of drinking water for 5-7 days. 
                                Swine: 2-4 g/L of drinking water for 5-7 days.
                            </p>
                        
                            <p><b>Packaging:</b>1 Kilogram.</p> 
                            <p>VRM-18-2847</p> 
                        
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection
