@extends('layouts.app')
  
@section('title', 'Dashboard - 2.0')
  
@section('content')
<div class="container-fluid">
  <div class="row">
    Dashboard
  </div>
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Today </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="clock"></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="country"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     @canany(['create-product', 'edit-product', 'delete-product'])
                      <a class="nav-link" href="{{ route('products.index') }}">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Product</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countProduct}}%</div>
                      </a>
                      @else
                      <a class="nav-link" href="#">#</a>
                      @endcanany
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cubes fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tasks Card Example -->
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        @canany(['create-profile', 'edit-profile', 'delete-profile'])
                      <a class="nav-link" href="{{ route('profile.index') }}">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Profile Creation
                        </div>
                        <div class="no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                      </a>
                      @else
                      <a class="nav-link" href="#">#</a>
                      @endcanany
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection