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
            <div class="events-section-period">Ноябрь — 2023</div>
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

          <div class="events-group">
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">10</div>
                <div class="events-item-date__month">пятница</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Москва</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-moscow.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">10</div>
                <div class="events-item-date__month">пятница</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Санкт-Петербург</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-saint-petersburg.png" alt="">
              </div>
            </div>
          </div>

          <div class="events-group">
            <div class="events-section-period">Январь — 2024</div>
            <div class="events-item">
              <div class="events-item-date">
                <div class="events-item-date__day">01</div>
                <div class="events-item-date__month">coming<br>soon</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Дубай</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
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
                <div class="city-name">Анталья</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
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
                <div class="city-name">Алания</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-alanya.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active">
              <div class="events-item-date">
                <div class="events-item-date__day">08</div>
                <div class="events-item-date__month">вторник</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Лимассол</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
                </div>
              </div>
              <div class="events-item-image">
                <img src="/img/events-limassol.png" alt="">
              </div>
            </div>
            <div class="events-item events-item-active events-item-last">
              <div class="events-item-date">
                <div class="events-item-date__day">22</div>
                <div class="events-item-date__month">вторник</div>
              </div>
              <div class="events-item-place">
                <div class="city-name">Баку</div>
                <div class="place-name">Crocus City Hall</div>
                <div class="view-more">
                  <a href="/event" class="view-more-link">перейти к афише</a>
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