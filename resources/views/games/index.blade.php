@extends('layouts.app')
  
@section('title', 'Games')
  
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 col-md-3 mb-4">
      <h5>Games List</h5>
    </div>
  </div>
  <div class="row">

    <!-- Game One Card  -->
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    
                  <a href="{{ route('games.ticktak') }}" class="btn btn-success p-1">Tacktic tac toe</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    
                  <a href="{{ route('games.tetris') }}" class="btn btn-success p-1">Tetris</a>
                </div>
            </div>
        </div>
    </div>
    

  </div>
</div>

  @endsection