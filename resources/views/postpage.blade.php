@extends('app')
@section('title')
  @yield('post-title')
@endsection



@section('header')
@parent
@endsection

@section('content')
  @section('post-content')
    <div class="container-fluid">
      <div class="container mb-5">
        <div class="row">
          <div class="col-md-8">
            @yield('title')
            @yield('feature-image')

          </div>
          <div class="col-md-4 pl-5" style="border-left-style: solid; border-left-width: 1px;">
            <div class="row">
                <div class="col">
                  <h4>GET SOCIAL WITH US</h4>
                  <hr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <h4>FIND WHAT YOU'RE LOOKING FOR:</h4>
                  <hr>
                  <input type="search" id="search-field" class="search-field" placeholder="Search..." value="" name="s" tabindex="-1">
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <h4>RECENT POST THIS WEEK</h4>
                  <hr>
                  @for($i=0; $i<6; $i++)
                    <div class="row">
                        <div class="col-sm-3">
                          <img src="{{asset('img/logo.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-sm-3">
                          <p>Title</p>
                        </div>
                    </div>
                  @endfor
                </div>
                <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  @show
@endsection



