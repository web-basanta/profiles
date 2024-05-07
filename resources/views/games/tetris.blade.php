@extends('layouts.app')
  
@section('title', 'Tacktic tac toe game')
  
@section('content')

    <link rel="stylesheet" href="{{ asset('admin_assets/css/games.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('admin_assets/js/animatelo.min.js') }}"></script>
<div class="container">
    <div class="card-body">
   <div id="outer-board">
  <div id="board"> 
    <div id="banner">
      <div> 
        <div id="message">Tetris</div>
        <div id="new-game">Tap here to start!</div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 0px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 27.9906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 55.9812px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 83.9718px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 111.962px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 139.953px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 167.944px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 195.934px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 223.925px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 251.915px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 279.906px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 307.897px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 335.887px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 363.878px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 391.868px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 0px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 27.9906px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 55.9812px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 83.9718px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 111.962px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 139.953px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 167.944px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 195.934px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 223.925px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
    <div class="empty" style="left: 251.915px; top: 419.859px;">
      <div class="inner-tile">
        <div class="inner-inner-tile"></div>
      </div>
    </div>
  </div>
  <div id="stats">
    <div class="labels">Scores
      <div class="frame" id="score">0        </div>
    </div>
    <button class="btn btn-rounded" id="left"> <i class="fa fas fa-arrow-left"></i></button>
    <button class="btn btn-rounded" id="right"><i class="fa fas fa-arrow-right"></i></button>
    <button class="btn btn-rounded" id="rotate"> <i class="fa fas fa-undo flipx"></i></button>
    <button class="btn btn-rounded" id="down"> <i class="fa fas fa-arrow-down"></i></button>
  </div>
</div>
    </div>
</div>

  <script src="{{ asset('admin_assets/js/games-trat.js') }}"></script>
 


  @endsection