@section('title', 'Событие')

@extends('layouts.main-ru')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Выставка недвижимости <br> <span class="accentcolor">в Аланье <br> 3 июля 2023</span></div>
      <div class="main-text">Анталья, Mall of Antalya</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('event-advantages-section')

  @include('description-section')

  @include('callback-section')

</div>

@endsection