<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class PagesController extends Controller
{
    // RRLC HOMEPAGE
    public function index() {
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

    public function rrlcaboutus() {
        Mapper::map(14.289683, 121.011593);
        return view('pages.rrlc.aboutus');
    }

    public function rrlccontactus() {
        return view('pages.rrlc.contactus');    
    }


    // BC HOMEPAGE
    public function bcindex() {
        return view('pages.bc.index');
    }

    public function bcaboutus() {
        return view('pages.bc.aboutus');
    }

    public function bcproduct() {
        return view('pages.bc.product');
    }

    // BMC HOMEPAGE
    public function bmcindex() {
        return view('pages.bmc.index');
    }


    // BMC PAHD HOMEPAGE
    public function bmcpahdindex() {
        return view('pages.bmc.pahdindex');
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


    // BMC FOOD HOMEPAGE
    public function bmcfoodindex() {
        return view('pages.bmc.foodindex');
    }
} 
