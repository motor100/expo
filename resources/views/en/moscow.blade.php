@section('title', 'Moscow')

@extends('layouts.main-en')

@section('content')

<div class="event">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Real estate exhibition in  <br> <span class="accentcolor">Moscow <br> {{ $city->dmy }}</span></div>
      <div class="main-text">{{ $city->title_en }}, {{ $city->place }}</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">GET AN INVITATION</button>
    </div>
  </div>

  <div class="fake-section"></div>

  @include('en.event-advantages-section')

  @include('en.description-section')

  @include('en.callback-section')

</div>

@endsection