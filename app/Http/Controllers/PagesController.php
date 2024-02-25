<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function aboutus(){
        return view("aboutus");
    }
    public function services(){
        return view("service");
    }
    public function contactus(){
        return view("contactus");
    }
}
