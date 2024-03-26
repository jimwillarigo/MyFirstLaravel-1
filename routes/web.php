<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\auth\LoginRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/post/{post_title}', function ($post_title) {
    return view('post')->with("title", $post_title);
})->name('post');

//Basic Routing
//Naming Routes
//Required Parameters
//Optional Parameter
//Route Group
//Router Resource

// Route::get('greetings', function(){
//     return "Hello Laravel World!";
// });

// Route::get('greetings/{name}', function($name){
//     return "Hi $name! Welcome to Laravel World!";
// });

// Route::get('greetings/{name?}', function($name = "Unknown"){
//         return "Hi $name! Welcome to Laravel World!";
// });

// Route::group(['prefix' => 'dashboard'], function(){
//     Route::get('{admin}', function(){
//         return "Welcome to Admin Dashboard";
//     });
//     Route::get('user', function(){
//         return "Welcome to User Dashboard";
//     });
// });


// Route::group(['prefix' => 'profile'], function(){
//     Route::get('{name?}', function($name = ""){
//         if($name == ""){
//             return "Nothing to show profile!";
//         }
//         return "Hi $name! Welcome to your profile!";
//     });
// });

// Controller
// Route::get('contactus', [PagesController::class, 'contactus']);



//Resource
// Route::resource('blog', 'PageController');
// Route::resource('blogs', "BlogController");




   

Route::get('/', function () {
    return view('home');
})->name("home");



//Custom Authentication

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


// PageController
// Route::get('/', 'PagesController@home');
// Route::get('aboutus', 'PagesController@aboutus')->name("aboutus");
// Route::get('service', 'PagesController@services')->name("services");
// Route::get('contactus', 'PagesController@contactus')->name('contactus');
// Route::get('404', 'PagesController@Exception404')->name('404');
// Route::get('500', 'PagesController@Exception500')->name('500');


Route::controller(PagesController::class)->group(function() { 
    // Route::get('/', 'home')->name("home");
    Route::get('about', 'about')->name("about");
    Route::get('menu', 'menu')->name("menu");
    Route::get('contactus', 'contactus')->name('contactus');
    Route::get('404', 'Exception404')->name('404');
    Route::get('500', 'Exception500')->name('500');
});

Route::controller(DashboardController::class)->group(function() { //I separated this for index purpose
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('/student', 'dashboard_student')->name('dashboard_student');
        Route::get('/post', 'dashboard_post')->name('dashboard_post');
        Route::get('/attendance', 'dashboard_attendance')->name('dashboard_attendance');
        Route::get('/settings', 'dashboard_settings')->name('dashboard_settings');
    });
});