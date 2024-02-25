<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/', 'PagesController@home');
Route::get('aboutus', 'PagesController@aboutus');
Route::get('service', 'PagesController@sevices');
Route::get('blog', 'PagesController@blog');
Route::get('contactus', 'PagesController@contactus');



//Resource
// Route::resource('blog', 'PageController');
Route::resource('blog', "PagesController");


    

Route::get('/', function () {


    $name = "Ebrahim";
    $birthday = "July, 10, 2006";
    $age = 18;
    $position = "IT Instructor";

// $members = [
//     "name"=> "Mohammad Rafi",
//     "birthday" => "February 27, 2020",
//     "age" => 4,
//     "position" => "Eldest"];

// $members = array();
$members = array(
            array(
                "name"=> "Ebrahim",
                "birthday" => "July 10, 2006",
                "age" => 18,
                "position" => "Father"),
            array(
                "name"=> "Rose Marie",
                "birthday" => "July 17, 1993",
                "age" => 30,
                "position" => "Mother"),
            array(
                "name"=> "Mohammad Rafi",
                "birthday" => "February 27, 2020",
                "age" => 4,
                "position" => "Eldest son"),
            array(
                "name"=> "Farhana",
                "birthday" => "August 14, 2021",
                "age" => 3,
                "position" => "Youngest Daughter"));
                

    // return view('home', $members);
    return view('home')
    ->with("n", $name)
    ->with("b", $birthday)
    ->with("a", $age)
    ->with("p", $position)
    // ->with($members);
    ->with("members" ,$members);
})->name("home");