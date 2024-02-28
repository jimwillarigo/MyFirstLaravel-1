<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $name = "Ebrahim";
        $birthday = "July, 10, 2006";
        $age = -1;
        $position = "IT Instructor";
        
        return view("blog");
    }
    public function store(){
    }
    public function create(){
    }
    public function show(){
    }
    public function update(){
    }
    public function destroy(){
    }
    public function edit(){
    }

}
