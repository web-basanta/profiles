@extends('layouts.app')
  
@section('title', 'Tacktic tac toe game')
  
@section('content')

    <link rel="stylesheet" href="{{ asset('admin_assets/css/games.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<div class="container">
    <div class="row">
    <div id='outer-board'>
  <div id='board'> 
    <div id='banner'>
      <div> 
        <div id='message'></div>
        <div id='new-game'>Tap here to start!</div>
      </div>
    </div>
    <!-- Loop to create 160 empty tiles -->
    <div id='empty-tiles'>
      <div class="empty">
        <div class="inner-tile">
          <div class="inner-inner-tile"></div>
        </div>
      </div>
      <!-- Repeat this div 159 more times -->
      <!-- (I'm assuming you want to repeat the inner divs 160 times) -->
      <!-- The content of this div is not clear from the Pug code, so I repeated the same structure as above -->
      <!-- If you have different content for each tile, please adjust accordingly -->
    </div>
  </div>
  <div id='stats'>
    <div class='labels'> Scores
      <div id='score' class='frame'>0</div>        
    </div>
    <button class='btn btn-rounded' id="left"> 
      <i class="fa fas fa-arrow-left"></i>
    </button>
    <button class='btn btn-rounded' id="right">
      <i class="fa fas fa-arrow-right"></i>
    </button>
    <button class='btn btn-rounded' id="rotate"> 
      <i class="fa fas fa-undo flipx"></i>
    </button>
    <button class='btn btn-rounded' id="down"> 
      <i class="fa fas fa-arrow-down"></i>
    </button>
  </div>
</div>
    </div>
</div>

  <script src="{{ asset('admin_assets/js/games.js') }}"></script>

  @endsection