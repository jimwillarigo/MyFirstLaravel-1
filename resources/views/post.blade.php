@extends('postpage')

@section('post-title')
  POST-TITLE
@endsection


@section('post-content')
@parent
  @section('title')
      <h1 class="text-uppercase">{{$title}}</h1>
  @endsection

  @section('feature-image')
    <img src="{{asset('img/Laravel-Banner.png')}}" class="d-block w-100" alt="...">
  @endsection



@endsection