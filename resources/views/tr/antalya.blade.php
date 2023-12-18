@section('title', 'Antalya')

@extends('layouts.main-tr')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Antalya emlak fuarı <br> <span class="accentcolor">22 Mart 2024</span></div>
      <div class="main-text">{{ $city->title_tr }}, {{ $city->place }}</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">DAVET ALIN</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('tr.event-advantages-section')

  @include('tr.description-section')

  @include('tr.callback-section')

</div>

@endsection