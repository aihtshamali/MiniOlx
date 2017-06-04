<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OLX.com</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css.map" media="screen" title="no title">
  </head>
  <body>
<div class="container" >
  <nav class="navbar navbar-default">
    <div class="container-fluid" style="height:100px;">
      <div class="navbar-header"  >
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="/images/logo.png" style="size:40%;margin-top:-3px">
        </a>
        <a class="navbar-brand" href="{{route('welcome')}}" style="margin:20px;font-size:30px;">YourStore</a>

      </div>
    </div>
  </nav>

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="\css\jquery-ui\js\jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }
  </style>
</head>
<body>

{{-- <div class="jumbotron">
  <div class="container text-center">
    <h1>K D for Sale</h1>
    <p>Mission, Vission & None</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div> --}}
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('/home')}}">Home</a></li>
        <li><a href="/ads">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
