@section('title', 'Poster')

@extends('layouts.main-tr')

@section('content')

<div class="poster">

  <div class="main-section">
    <div class="container-xl"> 
      <div class="main-title _anim-items _anim-no-hide">Güncel kalın - şehrinizdeki etkinlikler <br>о мероприятиях <span class="accentcolor">hakkında bilgi edinin</span></div>
      <div class="main-text">100% varlık güvenliği, 3 ayda bir kâr!</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">DAVET ALIN</button>
    </div>
  </div>

  <div class="events-section section">
    <div class="events-section-title-wrapper">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-8">
            <div class="section-title _anim-items _anim-no-hide">olaylar 2023-2024</div>
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
                    <div class="events-item-date__month">{{ $city->day_tr }}</div>
                  </div>
                  <div class="events-item-place">
                    <div class="city-name">{{ $city->title_tr }}</div>
                    <div class="place-name">{{ $city->place }}</div>
                    <div class="view-more">
                      <a href="/tr/{{ $city->slug }}" class="view-more-link">postere git</a>
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