<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('about');
    }
    public function home(){
        $this->index();
    }
    public function about(){
        return view("about");
    }
    public function menu(){
        return view("menu");
    }
    public function contactus(){
        return view("contactus");
    }



}
