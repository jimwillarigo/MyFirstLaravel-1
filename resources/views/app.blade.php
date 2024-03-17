<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
    <link rel="icon" href="{{asset('img/sia-logo.png')}}">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <head>
        <title>{{config('app.name','PIS')}} - @yield('title')</title>
    </head>
    
    <style>
    @section('style')
        /* td{
            border-color: #000000;
            border-style: solid;
            border-width: 1px;
            padding: 5px;   
        } */

        .pl-5{
            padding-left: 60px !important; 
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .table-responsive {
            max-height:300px;
        }
        
	@media only screen and (min-width: 400px) 
	and (max-width: 1200px){

        .side-nav-item{
                font-size: 12px !important;
            }
        }
        @media (max-width: 576px) {
        }
        @media (max-width: 768px) {
        }
        @media (min-width: 992px) {
        }
        @media (min-width: 1200px) {
        }
        @media (min-width: 1400px) {
        }
    @show
    </style>

<script>
    $(document).ready(function() {
      $('.dropdown').hover(function() {
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
      }, function() {
        $(this).removeClass('show');
        $(this).find('.dropdown-menu').removeClass('show');
      });
});
</script>


    <body>
        
        @section('header')
        <!-- Modal -->
        <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Do you really want to Logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        >Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-white">  <!-- bg-body-tertiary -->
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ URL('/')}}"><img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"></a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ URL('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ URL('/aboutus')}} ">About SIA</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ URL('/service')}}">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Services 1</a></li>
                                <li><a class="dropdown-item" href="#">Services 2</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Services 3</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/blogs">Blogs</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/contactus">Contact Us</a>
                            </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li> -->
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                                </li>
                            @else    
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li>
                                        <a value="logout" class="dropdown-item logout" id="dropdown-item logout" data-bs-toggle="modal" data-bs-target="#logoutmodal"
                                        >Logout</a>
                                    </li>   
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
            
        @show

        

        @section('content')
        <div class="container-fluid text-center p-0">
            <!-- <a class="navbar-brand" href="/"><img src="{{asset('img/IAS.png')}}" alt="IAS "></a> -->
            
            <div id="carouselExampleFade" class="carousel slide">  <!--  carousel-fade add this to make it fade instead -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('img/Laravel-Banner.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/Laravel-Banner.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/Laravel-Banner.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        @show
        

        @section('footer')
        <div class="container-fluid p-0 bg-dark">
            <div class="container pt-5 pb-5">
                <div class="row text-white">
                    <div class="col-md">
                        <a class="navbar-brand" href="/"><img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"></a>
                        <h3>System Integrated Archeticture</h3>
                        <p style="text-align: justify;">It describes data, application, and technology needed to create business solutions for organizations</p>
                    </div>
                    <div class="col-md">
                        <h3>Quick Links</h3>
                        <ul class="" style="list-style: none;">
                            <li><a href="/service">Services</a></li>
                            <li><a href="/aboutus">About Us</a></li>
                            <li><a href="/blogs">Blogs Us</a></li>
                            <li><a href="/contactus">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Follow Us</h3>
                        <button type="button" class="btn btn-outline-primary">Facebook</button>
                        <button type="button" class="btn btn-outline-info">Twitter</button>
                        <button type="button" class="btn btn-outline-warning">Instagran</button>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="container-fluid pt-3 bg-primary">
            <div class="row text-center">
                <div class="col">
                    <p class="text-white">Powered by <a href="https://laravel.com/" class="text-white">Laravel</a></p>
                </div>
            </div>
        </div>
        @show

    </body>
</html>