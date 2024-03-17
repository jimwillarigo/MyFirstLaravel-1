@extends('auth.dashboard')
@section('title')
Dashboard | Post
@endsection

@section('header')
@parent
@endsection

@section('content')
@parent

    @section('crud-content-title')
        LIST OF POST
    @endsection
    @section('crud-content')

    @endsection

@endsection