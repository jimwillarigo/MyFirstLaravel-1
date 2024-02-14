<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

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