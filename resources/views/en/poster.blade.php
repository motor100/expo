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
            <div class="events-section-period">November - 2023</div>
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

          <div class="events-group">
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">10</div>
                <div class="events-item-date__month">Friday</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Moscow</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-moscow.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">10</div>
                <div class="events-item-date__month">Friday</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Saint Petersburg</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-saint-petersburg.png" alt="">
              </div>
            </div>
          </div>

          <div class="events-group">
            <div class="events-section-period">January - 2024</div>
            <div class="events-item">
              <div class="events-item-date">
                <div class="events-item-date__day">01</div>
                <div class="events-item-date__month">coming<br>soon</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Dubai</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-dubai.png" alt="">
              </div>
            </div>
            <div class="events-item">
              <div class="events-item-date">
                <div class="events-item-date__day">01</div>
                <div class="events-item-date__month">coming<br>soon</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Antalya</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-antalya.png" alt="">
              </div>
            </div>
          </div>

          <div class="events-group">
            <div class="events-section-period">Февраль 2024</div>
            <div class="events-item">
              <div class="events-item-date">
                <div class="events-item-date__day">01</div>
                <div class="events-item-date__month">coming<br>soon</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Alanya</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-alanya.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">08</div>
                <div class="events-item-date__month">Tuesday</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Limassol</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-limassol.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active events-item-last">
              <div class="events-item-date">
                <div class="events-item-date__day">22</div>
                <div class="events-item-date__month">Tuesday</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Baku</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">go to the poster</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-baku.png" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const menuItem = 2;
</script>

@endsection