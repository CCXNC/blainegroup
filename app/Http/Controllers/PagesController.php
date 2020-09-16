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
    
}
