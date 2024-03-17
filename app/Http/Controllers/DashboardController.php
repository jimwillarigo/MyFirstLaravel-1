<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        if($this->checkAuth())
        {
            return view('auth.dashboard');
        }
        
        return redirect()->route('home');
    }
    public function dashboard_home(){
        $this->index();
    }
    
    public function dashboard_student(){
        if($this->checkAuth())
        {
            return view('dashboard_student');
        }
        
        return redirect()->route('home');
    }

    public function dashboard_post(){
        if($this->checkAuth())
        {
            return view('dashboard_post');
        }
        
        return redirect()->route('home');
    }

    public function dashboard_attendance(){
        if($this->checkAuth())
        {
            return view('dashboard_attendance');
        }
        
        return redirect()->route('home');
    }

    public function dashboard_settings(){
        if($this->checkAuth())
        {
            return view('dashboard_settings');
        }
        
        return redirect()->route('home');
    }


    public function checkAuth(){
        if(Auth::check())
        {
            return true;
        }else{
            return false;
        }
    }
}
