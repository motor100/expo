@section('title', 'Афиша')

@extends('layouts.main-ru')

@section('content')

<div class="poster">

  <div class="main-section">
    <div class="container-xl"> 
      <div class="main-title _anim-items _anim-no-hide">Будьте в курсе событий - узнайте <br>о мероприятиях <span class="accentcolor">в своём городе</span></div>
      <div class="main-text">100% обеспеченность активами, прибыль каждые 3 месяца!</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
    </div>
  </div>

  <div class="events-section section">
    <div class="events-section-title-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-8">
            <div class="section-title _anim-items _anim-no-hide">Мероприятия 2023-2024</div>
          </div>
          <div class="col-md-4">
            <div class="events-title-image">
              <img src="/img/events-title-image.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="events-wrapper">
      <div class="container-xl">
        <div class="events">

          @foreach($cities_array as $item)
            <div class="events-group">
              <div class="events-section-period">{{ $item['text'] }}</div>
              @foreach($item['cities'] as $city)
                <div class="events-item events-item-active">
                  <div class="events-item-date">
                    <div class="events-item-date__day">{{ $city->date->format('d') }}</div>
                    <div class="events-item-date__month">{{ $city->day_ru }}</div>
                  </div>
                  <div class="events-item-place">
                    <div class="city-name">{{ $city->title_ru }}</div>
                    <div class="place-name">{{ $city->place }}</div>
                    <div class="view-more">
                      <a href="/{{ $city->slug }}" class="view-more-link">перейти к афише</a>
                    </div>
                  </div>
                  <div class="events-item-image">
                    <img src="{{ Storage::url($city->image) }}" alt="">
                  </div>
                </div>
              @endforeach
            </div>
          @endforeach
           
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const menuItem = 2;
</script>

@endsection