@section('title', 'Событие')

@extends('layouts.main-ru')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Выставка недвижимости <span class="accentcolor">в Москве<br>12 октября 2023</span></div>
      <div class="main-text">Москва, Ritz Carlton Hotel</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('event-advantages-section')

  @include('description-section')

  @include('callback-section')

</div>

@endsection