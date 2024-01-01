@section('title', 'Дубай')

@extends('layouts.main-ru')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Выставка недвижимости  <br> <span class="accentcolor">в Дубае <br> {{ $city->dmy }}</span></div>
      <div class="main-text">{{ $city->title_ru }}, {{ $city->place }}</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('event-advantages-section')

  @include('description-section')

  @include('callback-section')

</div>

@endsection