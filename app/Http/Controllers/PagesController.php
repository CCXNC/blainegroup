<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class PagesController extends Controller
{
    //BLAINE GROUP 
    public function index() {
        Mapper::map(14.289683, 121.011593);
        return view('pages.bc.index');
    }

    // RRLC HOMEPAGE
    public function rrlcindex() {
        return view('pages.rrlc.index');
    }

    // RRLC OUR PRODUCT
    public function rrlcproduct() {
        return view('pages.rrlc.primeproduct');
    }
    
    // RRLC PRODUCT LIST
    public function rrlcproductlist() {
        return view('pages.rrlc.primeproductlist');
    }

    public function rrlcoralsolution() {
        return view('pages.rrlc.rrlcoralsolution');
    }

    // RRLC SPECIALTY PRODUCT
    public function rrlcspecialtyproduct() {
        return view('pages.rrlc.specialtyproduct');
    }

    public function keminproduct() {
        return view('pages.rrlc.keminproduct');
    }

    public function enzymeproduct() {
        return view('pages.rrlc.enzymeproduct');
    } 

    public function cbsproduct() {
        return view('pages.rrlc.cbsproduct');
    }

    public function adisseoproduct() {
        return view('pages.rrlc.adisseoproduct');
    }

    public function productblog() {
        return view('pages.rrlc.productblog');
    }    

    public function technicalservice() {
        return view('pages.rrlc.technicalservice');
    }
    
    public function newsarticle() {
        return view('pages.rrlc.newsarticle');
    }


    public function newsarticleblog() {
        return view('pages.rrlc.newsarticleblog');
    }
    public function newsarticleblog1() {
        return view('pages.rrlc.newsarticleblog1');
    }
    public function newsarticleblog2() {
        return view('pages.rrlc.newsarticleblog2');
    }
    public function newsarticleblog3() {
        return view('pages.rrlc.newsarticleblog3');
    }

    public function rrlcaboutus() {
        Mapper::map(14.289683, 121.011593);
        return view('pages.rrlc.aboutus');
    }

    public function rrlccontactus() {
        return view('pages.rrlc.contactus');    
    }


    // BC HOMEPAGE
    public function bcindex() {
        return view('pages.bc.rawmats');
    }

    public function bcaboutus() {
        Mapper::map(14.289683, 121.011593);
        return view('pages.bc.rawmatsstory');
    }

    public function bcproduct() {
        return view('pages.bc.rawmatsproducts');
    }

    public function bccontactus() {
        return view('pages.bc.rawmatscontactus');
    }

    // BC RAW MATS
    public function bcrawmats() {
        return view('pages.bc.rawmats');
    }

    public function bcrawmatsstory() {
        return view('pages.bc.rawmatsstory');
    }

    public function bcrawmatsproducts() {
        return view('pages.bc.rawmatsproducts');
    }

    // BMC HOMEPAGE
    public function bmcindex() {
        return view('pages.bmc.index');
    }

    

    // BMC PAHD HOMEPAGE
    public function bmcpahdindex() {
        return view('pages.bmc.pahdindex');
    }

    public function bmcpahdaboutus() {
        return view('pages.bmc.pahdaboutus');
    }

    public function bmcpahdproductpersonalcare() {
        return view('pages.bmc.productpahdpersonalcare');
    }
    
    public function bmcpahdproducthomecare() {
        return view('pages.bmc.productpahdhomecare');
    }

    public function bmcpahdproductrawmaterial() {
        return view('pages.bmc.productpahdrawmaterial');
    }

    public function bmcpahdcontactus() {
        return view('pages.bmc.pahdcontactus');
    }
    
    public function bmcpahdtechnical() {
        return view('pages.bmc.pahdtechnical');
    }


    // BMC FOOD HOMEPAGE
    public function bmcfoodindex() {
        return view('pages.bmc.foodindex');
    }

    public function bmcfoodhome() {
        return view('pages.bmc.foodhome');
    }

    public function bmcfoodabouthistory() {
        return view('pages.bmc.foodabouthistory');
    }

    public function bmcfoodaboutdivision() {
        return view('pages.bmc.foodaboutdivision');
    }

    public function bmcfoodspices() {
        return view('pages.bmc.foodspices');
    }

    public function bmcfooddehydratedherbs() {
        return view('pages.bmc.fooddehydratedherbs');
    }

    public function bmcfoodoleoresins() {
        return view('pages.bmc.foodoleoresins');
    }

    public function bmcfoodiqf() {
        return view('pages.bmc.foodiqf');
    }

    public function bmcfooddaregal() {
        return view('pages.bmc.fooddaregal');
    }

    public function bmcfoofnutritional() {
        return view('pages.bmc.foodnutritional');
    }

    public function bmcfoodrawmats() {
        return view('pages.bmc.foodrawmats');
    }

    public function bmcfoodtechnicalproduct() {
        return view('pages.bmc.foodtechnicalproduct');
    }

    public function bmcfoodtechnicaltolling() {
        return view('pages.bmc.foodtechnicaltolling');
    }
} 
