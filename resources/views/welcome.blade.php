{{-- @include('partials.header') --}}
@extends('layouts.guest')
@section('content')
  <nav class="navbar navbar-inverse" >
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" style="font-weight:bold;font-family:arial;font-style:italic;">
      <li class="active"> <a href="{{route('/home')}}"> Home </a></li>
      <li><a href="{{url('/ads')}}">Products</a></li>
      <li><a href="#">Deals</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div>
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{url('/home')}}"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}</a>
                  <span class="nav navbar-nav navbar-right">
                   <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                 </span>

                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                  @endif
                </div>
              @endif

</div>
</nav>
        <div class="content">
            <div class="title m-b-md">
            {{config('app.name')}}
            </div>
            <div>
              <h1>  <a href="{{url('/ads')}}">All Ads</a> </h1>
            </div>
        </div>
      </div>
@endsection
