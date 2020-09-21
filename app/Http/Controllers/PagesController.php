<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function newsarticle() {
        return view('pages.rrlc.newsarticle');
    }

    public function newsarticleblog() {
        return view('pages.rrlc.newsarticleblog');
    }
}
