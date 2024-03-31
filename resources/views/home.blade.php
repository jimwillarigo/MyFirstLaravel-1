@extends('app')
@section('title')
Home
@endsection

@php
/*
@section('additional_menu')

                            <li class="nav-item">
                            <a class="nav-link" href="/blogs">Additional Menu 1</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/contactus">Additional Menu 2</a>
                            </li>
@endsection
*/
@endphp

@section('content')
@parent
<!-- Defination Section -->
<div class="container-fluid">
    <div id="about" class = "container pt-5 pb-5">
        <div class="row text-center">
            <h2 class="text-uppercase">Coffee Shop</h2>
            <p>The coffee shop air swirls with aromatic dreams, little wonder it is a place we writers are drawn to. <br>
            It specifically focuses on the various management strategies of system architecture as well as their integration into the organization. </p>
            <p style="text-align: justify;">The coffee shop of white cups and black coffee, of small jugs filled with cream, has that ambience of friendly chatter. Here I can have my own seat, gain the feeling of being social, yet have the confidence that I can enjoy my own contemplations at leisure.</p>
        </div>
        <div class="row">
            <div class="col">
                <h3> Coffee is the ultimate stress reliever. </h3>
                <ul>
                    <li>Life is too short for bad coffee.</li>
                    <li>Happiness is a warm cup of coffee.</li>
                    <li>The best coffees are the ones that taste like a conversation.</li>
                    <li>Coffee is the universal language.</li>
                </ul>
            </div>
        </div>
            
            
        </div>
    </div>
</div>

<!-- Approach Section -->
<div class="container-fluid bg-dark text-white">
    <div class = "container pt-5 pb-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-uppercase">System Integration Approach</h2>
                <p class="text-center">System integration is multifaceted and can be approached through different architectural models, depending on the number and nature of components that need to be connected.</p>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Brown sugar espresso">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Chocolate almond">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Iced-Caramel-Macchiato">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection


@section('footer')
@parent
@endsection