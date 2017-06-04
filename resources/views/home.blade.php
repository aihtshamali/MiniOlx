@extends('layouts.app')
@section('content')
<div class="container-fluid" align="center" >
    <div class="row">

      @if($user->getType() == 'Buyer')
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default" style="text-align:center;width:50%; ">
            <div class="panel-heading">
              Accountant :   {{$user->getType()}}
              </div>
                <div class="panel-heading">
                  <a href="/ads">
                  {{config('app.name')}} Adds
                  </a>
                </div>
            </div>
        </div>
      @endif



      @if($user->getType() == 'Seller')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                Welcome <small>({{$user->name}})</small>
              </div>
              <div class="panel-heading">
              Account Type :   {{$user->getType()}}
              </div>

                <div class="panel-heading">
                  <a href="/seller/ad/create">
                    Create a new Ad
                  </a>
                </div>
                <div class="panel-heading">
                  <a href="/seller/ad">
                    View My Ads
                  </a>
                </div>
                <div class="panel-heading">
                  <a href="/ads">
                    View Ads
                  </a>
                </div>

            </div>
        </div>
      @endif

      @if($user->getType() == 'Admin')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
                Welcome Admin<small> ({{$user->name}} )</small>
              </div>
              <div class="panel-heading">
              Account Type :   {{$user->getType()}}
              </div>
                <div class="col-md-4 panel-heading">
                <a href="/seller/ad" class="thumbnail">
                    View Ads
                  </a>

                {{-- <div class="panel-heading">
                  <a href="">
                    View Ads
                  </a>
                </div> --}}
              </div>
                <div class="col-md-4 panel-heading">
                  <a href="/admin/views" class="thumbnail">
                     Counter Ads
                  </a>
                </div>
                <div class=" col-md-4 panel-heading">
                  <a href="/admin/views/categories" class="thumbnail">
                     Count Categories
                  </a>
                </div>
                <div class="col-md-4 panel-heading">
                  <a href="/admin/users" class="thumbnail">
                    View All Users
                  </a>
                </div>
                <div class="col-md-4 panel-heading">
                  <a href="/admin/categories/create" class="thumbnail">
                    New a Category
                  </a>
                </div>
                <div class="col-md-4 panel-heading">
                  <a href="/admin/categories" class="thumbnail">
                    View Categories
                  </a>
                </div>
              </div>
        </div>
      @endif


    </div>
</div>
@endsection
