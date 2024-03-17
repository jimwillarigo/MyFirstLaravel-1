@extends('app')
@section('title')
    yield('title')
@endsection

@section('header')
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
                        <a class="navbar-brand" href="{{ URL('/') }}"><img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50">
                        </a>
                        
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
                                    {{-- <a class="btn btn-outline-secondary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        >Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form> --}}
                                    
                                    <button value="logout" class="btn btn-outline-secondary logout" id="dropdown-item logout" data-bs-toggle="modal" data-bs-target="#logoutmodal"
                                    >Logout</button>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="container">
        
    <div class="row justify-content-center mt-3 mb-5">
        <div class="col col-md">
            <div class="row ">
                <div class="col-4 col-sm-2 col-md-2 col-lg-3">
                
                    <h5 class="text-capitalize">Hi! <br>{{ Auth::user()->name }},</h5>
                    <p>Welcome to the SIA Dashboard</p>
                    <div class="list-group">
                            <a class="list-group-item list-group-item-action fw-bold side-nav-item" href="{{ route('dashboard') }}">
                            <i class="bi bi-clipboard-data"></i> DASHBOARD</a>
                            <a class="list-group-item list-group-item-action fw-bold side-nav-item" href="{{ route('dashboard_student') }}">
                            <i class="bi bi-person-vcard"></i> STUDENT</a>
                            <a class="list-group-item list-group-item-action fw-bold side-nav-item" href="{{ route('dashboard_post') }}">
                            <i class="bi bi-journals"></i> POST</a>
                            <a class="list-group-item list-group-item-action fw-bold side-nav-item" href="{{ route('dashboard_attendance') }}">
                            <i class="bi bi-card-checklist"></i> ATTENDANCE</a>
                            <a class="list-group-item list-group-item-action fw-bold side-nav-item" href="{{ route('dashboard_settings') }}">
                            <i class="bi bi-gear"></i> SETTINGS</a>
                    </div>
                </div>
                <div class="col-8 col-sm-10 col-md-10 col-lg-9">
                    <h3 class="text-center">
                        @section('crud-content-title')
                            DASHBOARD
                        @show
                    </h3>

                    @yield('crud-content')
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

    
@endsection