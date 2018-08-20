<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages/home');
    }

    public function about(){
        return view('pages/about');
    }

    public function contact(){
        return view('pages/contact');
    }

    public function yoga(){
        return view('pages/yoga');
    }

    public function blogg(){
        return view('pages/blogg');
    }

    public function shop(){
        return view('pages/shop');
    }
}
