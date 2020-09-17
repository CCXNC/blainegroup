<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // RRLC HOMEPAGE
    public function index() {
        return view('pages.rrlcindex');
    }

    // RRLC OUR PRODUCT
    public function rrlcproduct() {
        return view('pages.rrlcproduct');
    }
    
    // RRLC PRODUCT LIST
    public function rrlcproductlist(){
        return view('pages.rrlcproductlist');
    }

    // BC HOMEPAGE
    public function bcindex(){
        return view('pages.bcindex');
    }
}
