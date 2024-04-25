@extends('layouts.app')

@section('content')

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form> --}}
            
                                {{ __('You are logged in!') }}
            
                                <p>This is your application dashboard.</p>
                                @canany(['create-role', 'edit-role', 'delete-role'])
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}">
                                        <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                                @endcanany
                                @canany(['create-user', 'edit-user', 'delete-user'])
                                    <a class="btn btn-success" href="{{ route('users.index') }}">
                                        <i class="bi bi-people"></i> Manage Users</a>
                                @endcanany
                                @canany(['create-product', 'edit-product', 'delete-product'])
                                    <a class="btn btn-warning" href="{{ route('products.index') }}">
                                        <i class="bi bi-bag"></i> Manage Products</a>
                                @endcanany
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Content Row -->

            </div>


@endsection