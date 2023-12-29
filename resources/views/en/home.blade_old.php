@section('title', 'Главная')

@extends('layouts.main-en')

@section('style')
  <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
@endsection

@section('content')

<div class="home">

  <div class="main-section">
    <div class="container-xl">
      <div class="main-title _anim-items _anim-no-hide">Exhibition of <span class="accentcolor">elite </span>foreign <br>real estate</div>
      <div class="main-text">The best foreign projects for relaxation and investment, the largest real estate<br> exhibition in <span class="text-bold">Europe and Asia</span></div>
      <div class="action-btns">
        <button class="main-accent-btn primary-btn js-callback-btn js-callback-btn">GET AN INVITATION
          <span class="flash lighting"></span>
        </button>
        <a href="/en/for-participants" class="become-a-member-btn secondary-btn">BECOME A MEMBER</a>
      </div>
    </div>
    <div class="main-slider-wrapper">
      <div class="main-slider swiper">
        <div class="swiper-wrapper">
          <div class="main-slider-item swiper-slide">
            <img src="/img/main-section-bg.png" alt="">
          </div>
          <div class="main-slider-item swiper-slide">
            <img src="/img/for-participants-bg.png" alt="">
          </div>
          <div class="main-slider-item swiper-slide">
            <img src="/img/poster-bg.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="advantages-section" class="advantages-section section">
    <div class="container">
      <div class="section-title _anim-items _anim-no-hide">Advantages of the<br><span class="accentcolor">exhibition-conference</span></div>
      <div class="flex-container">
        <div class="left">
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-like.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">The best developers and real estate agencies</div>
              <div class="left-item__text">Opportunity to meet and <span class="accent-text">get acquainted with leading developers and real estate agencies</span>. You will have the opportunity to see their projects and get information about the best offers on the market. <span class="accent-text">A wide selection of exclusive real estate</span> from recognized market leaders. You will be able to explore various offers and find properties that meet your requirements and preferences. Opportunity to establish contacts and negotiate with representatives of leading companies. You will be able to discuss transaction details, ask questions and receive <span class="accent-text">expert advice from real estate professionals</span>.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-close.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Exclusive and closed projects</div>
              <div class="left-item__text">Opportunity to learn about new projects that are not yet on the market. You will receive information about the latest and most innovative projects that are just appearing on the real estate market. <span class="accent-text">Access to exclusive offers and closed projects</span>. As part of the exhibition, you will be able to access offers that are not usually available publicly.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-live.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Live participation and demonstration</div>
              <div class="left-item__text">A variety of interactive activities allowing participants to evaluate and experience real estate properties in practice. You will be able to participate in various demonstrations and tests to get an idea of the quality and features of the property. <span class="accent-text">Presentations and demonstrations of new technologies and innovations</span> in the field of real estate.</div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="right-title">International exhibition</div>
          <div class="right-text">We are the <span class="accent-text">leading event organizers</span> in the industry, offering unique opportunities for partners and visitors. <span class="accent-text">Our exhibition is an ideal platform for meeting potential clients and partners</span>, as well as for learning the latest trends in the world of real estate.</div>
          <div class="right-blur">
            <img src="/img/advantages-right-blur.png" alt="">
          </div>
          <div class="right-label">
            <img src="/img/advantages-right-label.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="participants-section section">
    <div class="participants-content">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Exhibitors</span></div>
            <div class="participants-description">
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">Top companies</div>
                </div>
                <div class="participants-description-item__text">Participating companies undergo a two-stage selection process based on many criteria</div>
              </div>
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">Exclusive projects</div>
                </div>
                <div class="participants-description-item__text">The most unique projects from all over the world in one place</div>
              </div>

            </div>
            <div class="participants-description-underline"></div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="participants-counters">
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">1000+</div>
                  <div class="participants-counters-item__text">participants at the exhibition</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">15</div>
                  <div class="participants-counters-item__text">countries are participating</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">5400+</div>
                  <div class="participants-counters-item__text">projects at the exhibition</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="participants-wrapper">
      <div class="container">
        <div class="participants-cards">
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">Ellington properties</div>
              <div class="participants-item-content__text">Luxury developer Dubai with its 6 new projects</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg1.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">Whitewill</div>
              <div class="participants-item-content__text">TOP 3 real estate agencies according to Emaar, projects Moscow, Dubai, London, Miami</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg2.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">OXO Construction</div>
              <div class="participants-item-content__text">Elite developer of deluxe projects in sunny Alanya</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg3.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">KONAK Construction</div>
              <div class="participants-item-content__text">Premium projects in Turkey, founded since 1987</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg4.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">PRIME PROPERTY</div>
              <div class="participants-item-content__text">Elite developer of northern Cyprus, more than 237 projects</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg5.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-last-item">
            <div class="participants-item-content">
              <div class="participants-item-content__logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="participants-item-content__description">Here are the regular participants of our events. To view all participants, follow the link below.</div>
              <div class="participants-item-content__see-all">
                <a href="/en/">View all participants</a>
              </div>
            </div>
          </div>
          <div class="participants-logo-fragment">
            <img src="/img/participants-logo-fragment.svg" class="participants-logo-fragment-img" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="participants-bg">
      <img src="/img/participants-bg.png" class="participants-bg-img" alt="">
    </div>
  </div>

  <div class="ticket-section section">
    <div class="labels">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-form.svg" alt="">
              </div>
              <div class="labels-item__title">Fill the form</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-get.svg" alt="">
              </div>
              <div class="labels-item__title">Get an e-ticket</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-show.svg" alt="">
              </div>
              <div class="labels-item__title">Show your ticket at the <br>entrance to the exhibition <br>on <span class="accent">October 28-29</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ticket-wrapper">
      <div class="container">
        <div class="ticket">
          <div class="ticket-text-string">выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция</div>
          <div class="ticket-logo">
            <img src="/img/logo.svg" alt="">
          </div>
          <div class="ticket-title">Недвижимость за рубежом <br> <span class="accent">премиум и бизнес-класса</span></div>
          <div class="ticket-right-text ticket-date"><span class="accentcolor">28-29 Октября</span> 2023</div>
          <form class="form callback-form">
            <div class="flex-container">
              <input type="text" name="name" id="ticket-name" class="input-field" required placeholder="Представьтесь">
              <input type="text" name="phone" id="ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
              <input type="email" name="email" id="ticket-email" class="input-field" required placeholder="Email">
              <button type="button" class="callback-submit-btn primary-btn">Отправить</button>
            </div>
            <div class="checkbox-wrapper">
              <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="ticket-checkbox" checked required>
              <label for="ticket-checkbox" class="custom-checkbox-label"></label>
              <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен <br> и согласен с <a href="/en/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
            </div>
          </form>
          <div class="ticket-counter">Осталось всего<br> <span class="accentcolor">281</span> из 1000 мест</div>
          <div class="ticket-label">
            <img src="/img/ticket-label.png" class="ticket-label-image" alt="">
            <span class="ticket-label-text">электронный билет</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('cities-section')

  <div class="slider-section section">
    <div class="container">
      <div class="sn-slider-wrapper">
        <div class="sn-slider swiper">
          <div class="swiper-wrapper">
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide1.jpg" alt="">
            </div>
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide2.jpg" alt="">
            </div>
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide3.jpg" alt="">
            </div>
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide4.jpg" alt="">
            </div>
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide5.jpg" alt="">
            </div>
            <div class="sn-slider-item swiper-slide">
              <img src="/img/sn-slide6.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="sn-slider-logo-fragment sn-slider-logo-fragment-bottom">
          <img src="/img/slider-logo-fragment.svg" alt="">
        </div>
        <div class="sn-slider-logo-fragment sn-slider-logo-fragment-top">
          <img src="/img/slider-logo-fragment.svg" alt="">
        </div>
      </div>
    </div>
    <div class="slider-section-bg">
      <img src="/img/slider-section-bg.png" class="slider-section-bg-img" alt="">
    </div>
  </div>

  @include('description-section')

  <div id="partners-section" class="partners-section section">
    <div class="title-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title _anim-items _anim-no-hide"><span class="accentcolor">Мы гордимся</span></div>
            <div class="section-title__text">что имеем поддержку и сотрудничаем<br> с <span class="accent">ведущими информационными партнёрами</span>,<br> которые продвигают и поддерживают нашу выставку</div>
          </div>
          <div class="col-md-6">
            <div class="section-title__image">
              <img src="/img/partners-section-wall.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners">
      <div class="container">
        <div class="partners-title">Вот некоторые из них:</div>
        <div class="row">
          <div class="col-md-4">
            <div class="partners-item">
              <div class="partners-item-number">01</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">Журнал<br> <span class="accentcolor">«Недвижимость и строительство»</span></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="partners-item">
              <div class="partners-item-number">02</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">Портал<br> <span class="accentcolor">«Недвижимость Today»</span></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="partners-item">
              <div class="partners-item-number">03</div>
              <div class="vertikal-line"></div>
              <div class="partners-item-title">И другие<br> <span class="accentcolor">известные издания</span><br>и интернет-площадки</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners-logo">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="partners-logo-item">
              <img src="/img/partners-logo-temp.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('callback-section')

</div>

@endsection

@section('script')
  <script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
@endsection