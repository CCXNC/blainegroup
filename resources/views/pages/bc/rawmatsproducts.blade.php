@extends('layouts.bcapp')
<style>
    *, *:after, *:before {box-sizing: inherit;}
    * {margin:0;padding:0;border: 0 none; position: relative;}
    :root {
        --sinSerif: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
        --Nhexa: 4;
        --gap: 2vw;
        --size: calc(calc(100vw / var(--Nhexa)) - var(--gap));
    }
    @media only screen and (min-width: 1100px) {:root {--Nhexa: 6;}}
    @media only screen and (max-width: 600px) {
        :root {--Nhexa: 2;}
        body {margin-right: calc(var(--size) * .3);}
    }


    .sectionproduct { 
    margin: calc(var(--size) * .5) auto 0;
    width: calc(var(--size) * calc(var(--Nhexa) - 1));
        display: grid;
        grid-template-columns: repeat(var(--Nhexa), 1fr);
        grid-gap: var(--gap);
    }
    article {
        background: cadetblue;
    width: var(--size); 
    height: calc(var(--size) / 1.1111111);
        clip-path: url(#hexagono);
    clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
    margin-right: calc(var(--size) / 2);
        color: #fff;
        overflow: hidden;
    }
    article:nth-child(2n) {margin: calc(var(--size) * -.5) calc(var(--size) * -.25) 0 calc(var(--size) * -.75);}
    article::before {
        content: '';
        float: left;
        width: 25%;
        height: 100%;
        clip-path: polygon(0% 0%, 100% 0%, 0% 50%, 100% 100%, 0% 100%);
        shape-outside: polygon(0% 0%, 100% 0%, 0% 50%, 100% 100%, 0% 100%);
    }
    .img {
    width: var(--size);
        height: var(--size);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transform-origin: 0% 50%;
        transition: .75s;
        clip-path: url(#hexagono);
        clip-path: inherit;
        z-index:  10;
    }
    h2 {
        color: black; 
        margin: auto; 
    }
    figure {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        max-width: 50%;
        height: 100%;
        font-size: calc(9 / var(--Nhexa) * 1vw);
        line-height: 1;
        color: #fff;
        transition: .75s .05s;
    text-align: center;
    }
    p {
        color: #efefef;
        font-size: 20px;
        font-weight: 600;
    }
    h1 {
        width: 100vw;
        background: #FF0066;
        position: sticky;
        top: 0;
        z-index: 1;
        margin-bottom: calc(var(--size) * .55 + var(--gap));
        padding: 2vh 0;
        text-align: center;
        font-weight: 400;
        color: #fff;
    }
</style>
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
    <section class="sectionproduct">
        <article>
            <img class="img" alt src='/images/user1.png' />
        </article>

        <article>
            <p> <br><br><br> VITAMINS</p>
        </article>

        <article>
            <img class="img" alt src='/images/user2.png' />
        </article>

        <article>
            <p><br><br><br> MINERALS AND FEED ADDITIVES</p>
        </article>

        <article>
            <img class="img" alt src='/images/user3.png' />
        </article>

        <article>
            <p><br><br><br> EXCIPIENTS</p>
        </article>

        <article>
            <p><br><br><br> ANTIBIOTICS</p>
        </article>

        <article>
            <img class="img" alt src='/images/user1.png' />
        </article>

        <article>
            <P> <br><br><br> DISINFECTANTS</P>
        </article>

        <article>
            <img class="img" alt src='/images/user3.png' />
        </article>

        <article>
            <p> <br><br><br> PHARMACEUTTICAL</p>
        </article>

        <article>
            <img class="img" alt src='/images/user1.png' />
        </article>
    </section>
    <section class="rawmatsproducts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rawmatsproducts-wrapper">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ANTIBIOTICS</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                            Amoxicillin THD Compacted/Powder
                                            <br>Amoxicillin THD Powder C Feed Grade
                                            <br> Amprolium HCl
                                            <br> Attapulgite Pharmasorb
                                            <br> Chlortetracycline HCl
                                            <br> Dimetridazole BP98
                                            <br> Doxycycline HCl
                                            <br> Enrofloxacin HCl / Base
                                            <br> Florphenicol
                                            <br> Halquinol
                                            <br> Levamisole HCl
                                            <br> Neomycin Sulfate Feed Grade
                                         </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text">
                                                Norfloxacin Base USP29
                                        <br>    Norfloxacin HCl 98.5% USP
                                        <br>    Oxytetracycline HCl
                                        <br>    Robenidine HCl
                                        <br>    Sodium Sulfadiazine USP24
                                        <br>    Sulfadiazine Base
                                        <br>    Sulfamethoxazole
                                        <br>    Tiamulin Fumarate
                                        <br>    Trimethoprim BP98
                                        <br>    Tylosin Phosphate
                                        <br>    Tylosin Tartrate

                                         </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">VITAMINS</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                            <b>MICROVIT VITAMINS (ADISSEO)</b> 
                                        <br>    Microvit A1000 Supra
                                        <br>    Microvit B1 Promix (Thiamine Mono)
                                        <br>    Microvit B2 Supra 80%
                                        <br>    Microvit B3 Promix (Niacin)
                                        <br>    Microvit B5 Promix (Calpan)
                                        <br>    Microvit B6 Promix (Pyridoxine)
                                        <br>    Microvit B9 Promix (Folic Acid)
                                        <br>    Microvit B12 Promix 1%
                                        <br>    Microvit D3 Promix 500
                                        <br>    Microvit E Promix 50
                                        <br>    Microvit H Promix 2% (Biotin)
                                        <br>    Microvit K3 Promix MNB 96%

                                         </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text">
                                        <b>CLEO VITAMINS</b> 
                                        <br>    Vitamin A Oil Palmitate 1.7 MIU/G
                                        <br>        Vitamin D3 Oil 4 MIU/G
                                        <br>        Vitamin E Oil Acetate
                                        <br>        Vitamin B1 USP (Thiamine HCl)
                                        <br>        Vitamin B2 USP (Riboflavin)
                                        <br>        Vitamin B3 USP (Niacinamide)
                                        <br>        Vitamin B6 USP (Pyridoxine HCl)
                                        <br>        Vitamin B9 USP (Folic Acid)
                                        <br>        Vitamin B12 USP (Cyanocobalamin)
                                        <br>        Vit C Coated 35% / 97%
                                        <br>        Vitamin C Plain
                                        <br>        Sodium Ascorbate
                                         </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">MINERALS AND FEED ADDITIVES
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                            Colistin Sulfate
                                        <br>    Copper Sulfate
                                        <br>    Ferrous Sulfate
                                        <br>    Manganous Oxide
                                        <br>    Potassium Iodide
                                        <br>    Methyltestoterone
                                         </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">EXCIPIENTS
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                                Dextrose Anhydrous
                                        <br>    Glycerine USP
                                        <br>    Menthol Crystals
                                        <br>    Stearic Acid
                                         </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">DISINFECTANTS
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                                Glutaraldehyde 50%
                                        <br>    Povidone Iodine Powder
                                         </p>
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
