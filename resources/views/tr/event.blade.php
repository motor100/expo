@section('title', 'Событие')

@extends('layouts.main-tr')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Moskova'da emlak fuarı <span class="accentcolor">12 Ekim 2023</span></div>
      <div class="main-text">Moskova, Ritz Carlton Hotel</div>
      <button type="button" class="main-accent-btn primary-btn">DAVET ALIN</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('tr.event-advantages-section')

  @include('tr.description-section')

  @include('tr.callback-section')

</div>

<script>
  const menuItem = 1;
</script>

@endsection