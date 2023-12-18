@section('title', 'Poster')

@extends('layouts.main-en')

@section('content')

<div class="poster">

  <div class="main-section">
    <div class="container"> 
      <div class="main-title _anim-items _anim-no-hide">Stay up to date - find out about<br> <span class="accentcolor">events in your city</span></div>
      <div class="main-text">100% asset security, profit every 3 months!</div>
      <button type="button" class="main-accent-btn primary-btn js-callback-btn">GET AN INVITATION</button>
    </div>
  </div>

  <div class="events-section section">
    <div class="events-section-title-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section-title _anim-items _anim-no-hide">events 2023-2024</div>
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
      <div class="container">
        <div class="events">

          @foreach($cities_array as $item)
            <div class="events-group">
              <div class="events-section-period">{{ $item['text'] }}</div>
              @foreach($item['cities'] as $city)
                <div class="events-item events-item-active">
                  <div class="events-item-date">
                    <div class="events-item-date__day">{{ $city->date->format('d') }}</div>
                    <div class="events-item-date__month">{{ $city->day_en }}</div>
                  </div>
                  <div class="events-item-place">
                    <div class="city-name">{{ $city->title_en }}</div>
                    <div class="place-name">{{ $city->place }}</div>
                    <div class="view-more">
                      <a href="/en/{{ $city->slug }}" class="view-more-link">go to the poster</a>
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