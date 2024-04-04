@extends('app')
@section('title')
menu
@endsection


@section('content')
<div class = "container text-center">
    <h1>This is the content of menu</h1>
</div>
<style>
    body{
    
    background-color :#E26A6A;
    
}

.cerceve{
    position :relative;
    height: 700px;
    width: 400px;
    border-style: none;
    -webkit-border-radius: 7px;
    background-color: #ECECEC;
    margin: auto ;
    
   
}

.cerceve p span{
      
    position: absolute;
    left:40%;
    top: 25px;
    width:100%;
    font-family:  'Abel', sans-serif;
    font-size: 1.875rem;
    font-weight: bold;        
    color:#2574A9;
}

#kahve{
    position: absolute;
    left: 32%;
    top : 15%;
    
}

#arama{
    position:absolute;
    left:90%;
    top: 25px
}

#liste{
    position:absolute;
    left:5%;
    top:25px;
}
.menu{
    
    
    height:350px;
    width: 400px;
    background-color: #DADFE1;
    margin: 0 auto;
    position: absolute;
    bottom:0px;
    border-style: none;
    -webkit-border-bottom-right-radius: 7px;
    -webkit-border-bottom-left-radius: 7px;
    
    
}

.menu p {
    position: absolute;
    left:35%;
    top: -65px;
    width:100%;
    font-family:  'Abel', sans-serif;
    font-size: 1.875rem;
    font-weight:bold;        
    color:#2574A9;
    
    
}



.menu ul {
    
    list-style:none;
    position: absolute;
    left: 5%;
    top:30px;
    font-family:  'Abel', sans-serif;
    font-size: 1.075rem;
    font-weight:bold;        
    color:#95a5a6;
    
    
    
}

.menu ul li{
    
    list-style:none;
    position: relative;
    margin-left: 10px auto;
    top:10px;
    font-family:  'Abel', sans-serif;
    font-size: 1.275rem;
    font-weight:bold;        
    color:#2c3e50;
    line-height: 50px;
    
    
}

.menu ol {
    
    list-style:none;
    position: absolute;
    right: 15%;
    top:30px;
    font-family:  'Abel', sans-serif;
    font-size: 1.075rem;
    font-weight:bold;        
    color:#95a5a6;
    
    
    
    
}

.menu ol li{
    
    list-style:none;
    position: relative;
    margin-right: 100px auto;
    top:10px;
    font-family:  'Abel', sans-serif;
    font-size: 1.275rem;
    font-weight:bold;        
    color:#2c3e50;
    line-height: 50px;
    
    
    
}

.fiyat{
    
    height:320px;
    width: 320px;
    background-color: #ECECEC;
    margin-left: 10px auto;
    position: absolute;
    bottom:0px;
    left:40px;
    border-style: none;
    -webkit-border-top-left-radius: 7px;
    -webkit-border-top-right-radius: 7px;
    
}
</style>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="stil.css" />
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">


	<title>Untitled 1</title>
</head>

<body>

<div class="cerceve">
        <div id="kahve">
            <img src="http://i.hizliresim.com/VPBLby.png"/>
         </div>
         
         <div id="arama">
            <img src="http://i.hizliresim.com/9gb50r.png"/>
         </div>
         
         <div id="liste">
            <img src="http://i.hizliresim.com/ZMnVmk.png"/>
         </div>
    <p><span>MENU</span></p>

    
        <div class="menu">
            
                <p>COFFEE</p>
                
        <div class="fiyat"></div>
        <ol>SML &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LRG<br />
                           <li>2.30&nbsp;&nbsp;&nbsp;&nbsp; 3.50</li>
                           <li>3.10&nbsp;&nbsp;&nbsp;&nbsp; 3.50</li>
                           <li>1.90&nbsp;&nbsp;&nbsp;&nbsp; 2.20</li>
                           <li>2.60&nbsp;&nbsp;&nbsp;&nbsp; 3.00</li>
                           <li>2.20&nbsp;&nbsp;&nbsp;&nbsp; 2.70</li></ol>
                            
        
        
        

    <ul>SHOTS
            <li>Expresso</li>
            <li>Cappuccino</li>
            <li>Americano</li>
            <li>Cafe Latte</li>
            <li>Macchiato</li>
</ul>        
        </div>
        
</div>




</body>
</html>
@endsection
