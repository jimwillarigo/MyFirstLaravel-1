<!DOCTYPE html>
<html>

    <link rel="icon" href="{{asset('img/sia-logo.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <head>
        <title>Archeticture Ingtegrated System - @yield('title')</title>
    </head>

    <style>
        td{
            border-color: #000000;
            border-style: solid;
            border-width: 1px;
            padding: 5px;   
        }
    </style>



    <body>
        
        @section('header')
        <div class="container-fluid p-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-white">  <!-- bg-body-tertiary -->
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"></a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link" href="/contactus">Contact Us</a>
                            </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li> -->
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
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
            <div class="container pt-3">
                <div class="row">
                    <div class="col-md text-white">
                        <a class="navbar-brand" href="/"><img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"></a>
                        <h3>System Integrated Archeticture</h3>
                        <p style="text-align: justify;">It describes data, application, and technology needed to create business solutions for organizations</p>
                    </div>
                    <div class="col-md">
                        
                    </div>
                    <div class="col-md">
                        
                    </div>
                </div>
            </div>
           
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <p class="text-white">Powered by <a href="https://laravel.com/">Laravel</a></p>
                    </div>
                </div>
            </div>
        </div>
        @show
    </body>
</html>