@extends('app')
@section('title')
menu
@endsection


@section('content')

<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }
    
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      color: #333;
    }
    
    .menu-item {
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 20px;
    }
    
    .menu-item:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    
    .item-name {
      font-size: 18px;
      color: #333;
    }
    
    .item-description {
      color: #666;
      margin-bottom: 5px;
    }
    
    .item-price {
      font-weight: bold;
      color: #333;
    }

    
  </style>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="stil.css" />
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">


	<title>Untitled 1</title>

    <div class="container">
        <h1>Coffee Menu</h1>

        <div class="menu-item">
          <div class="item-name">Espresso</div>
          <div class="item-description">Strong black coffee made by forcing steam through ground coffee beans.</div>
          <div class="item-price">$2.50</div>
        </div>
        
        <div class="menu-item">
          <div class="item-name">Cappuccino</div>
          <div class="item-description">Espresso mixed with steamed milk and topped with foamed milk.</div>
          <div class="item-price">$3.50</div>
        </div>
        
        <div class="menu-item">
          <div class="item-name">Latte</div>
          <div class="item-description">Espresso mixed with steamed milk.</div>
          <div class="item-price">$4.00</div>
        </div>
        
        <div class="menu-item">
          <div class="item-name">Mocha</div>
          <div class="item-description">Espresso mixed with chocolate syrup and steamed milk, topped with whipped cream.</div>
          <div class="item-price">$4.50</div>
        </div>
        
      </div>




@endsection
