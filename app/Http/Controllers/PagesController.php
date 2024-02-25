<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function services(){
        return view("services");
    }
    public function contactus(){
        return view("contactus");
    }
    public function aboutus(){
        return view("aboutus");
    }
}
