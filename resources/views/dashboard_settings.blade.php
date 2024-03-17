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
        SETTINGS
    @endsection
    @section('crud-content')

    @endsection

@endsection