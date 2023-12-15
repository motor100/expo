@section('title', 'Saint Petersburg')

@extends('layouts.main-tr')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Saint Petersburg emlak fuarı <br> <span class="accentcolor">12 Ekim 2023</span></div>
      <div class="main-text">Saint Petersburg, Ritz Carlton Hotel</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">DAVET ALIN</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('tr.event-advantages-section')

  @include('tr.description-section')

  @include('tr.callback-section')

</div>

@endsection