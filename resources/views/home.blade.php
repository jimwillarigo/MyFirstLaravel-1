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
                <h2 class="text-uppercase">COFFEE QUOTES</h2>
                <p class="text-center">There's nothing like a good cup of coffee ☕ to get you going in the morning.</p>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
              <img src="img/brown-sugar-espresso.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Brown sugar espresso">BROWN SUGAR ESPRESSO</h5>
                <p class="card-text">Coffee is my love language.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="img/chocolate-almond.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Chocolate almond">CHOCOLATE ALMOND</h5>
                <p class="card-text">A good day starts with a great cup of coffee.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="img/Iced-Caramel-Macchiato.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="Iced-Caramel-Macchiato">ICED CARAMEL MACCHIATO</h5>
                <p class="card-text">Another day, another cup of coffee.</p>
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