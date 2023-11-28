@section('title', 'Главная')

@extends('layouts.main-tr')

@section('style')
  <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
@endsection

@section('content')

<div class="home">

  <div class="main-section">
    <div class="container">
      <div class="main-title _anim-items _anim-no-hide">Выставка <span class="accentcolor">элитной</span><br>зарубежной недвижимости</div>
      <div class="main-text">Лучшие зарубежные проекты для релокации и инвестиций, крупнейшая выставка<br>недвижимости в <span class="text-bold">Европе и Азии</span></div>
      <div class="action-btns">
        <button class="main-accent-btn primary-btn">ПОЛУЧИТЬ ПРИГЛАШЕНИЕ</button>
        <button class="become-a-member-btn secondary-btn">СТАТЬ УЧАСТНИКОМ</button>
      </div>
    </div>
  </div>

  <div id="advantages-section" class="advantages-section section">
    <div class="container">
      <div class="section-title _anim-items _anim-no-hide">Преимущества<br><span class="accentcolor">выставки-конференции</span></div>
      <div class="flex-container">
        <div class="left">
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-like.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Лучшие застройщики и агентства недвижимости</div>
              <div class="left-item__text">Возможность встретить и ознакомиться <span class="accent-text">с ведущими застройщиками и агентствами недвижимости</span>. У вас будет возможность увидеть их проекты и получить информацию о лучших предложениях на рынке. <span class="accent-text">Широкий выбор эксклюзивных объектов недвижимости</span> от признанных лидеров рынка. Вы сможете ознакомиться с различными предложениями и найти объекты, соответствующие вашим требованиям и предпочтениям. Возможность установить контакты и провести переговоры с представителями ведущих компаний. Вы сможете обсудить детали сделок, задать вопросы и получить <span class="accent-text">экспертные консультации от профессионалов</span> в области недвижимости.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-close.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Эксклюзивные и закрытые проекты</div>
              <div class="left-item__text">Возможность узнать о новых проектах, которые еще не представлены на рынке. Вы получите информацию о самых свежих и инновационных проектах, которые только появляются на рынке недвижимости. <span class="accent-text">Доступ к эксклюзивным предложениям и закрытым проектам</span>. В рамках выставки вы сможете получить доступ к предложениям, которые обычно не доступны публично.</div>
            </div>
          </div>
          <div class="left-item">
            <div class="left-item__icon">
              <img src="/img/advantages-house-live.svg" alt="">
            </div>
            <div class="left-item__content">
              <div class="left-item__title">Живое участие и демонстрация</div>
              <div class="left-item__text">Множество интерактивных мероприятий, позволяющих участникам на практике оценить и ощутить объекты недвижимости. Вы сможете участвовать в различных демонстрациях и испытаниях, чтобы получить представление о качестве и особенностях недвижимости. <span class="accent-text">Презентации и демонстрации новых технологий и инноваций</span> в области недвижимости.</div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="right-title">Международная выставка</div>
          <div class="right-text">Мы являемся <span class="accent-text">ведущими организаторами</span> мероприятий в данной сфере, предлагая уникальные возможности для партнёров и посетителей. Наша выставка является <span class="accent-text">идеальной площадкой для встречи с потенциальными клиентами и партнёрами,</span> а также для узнавания последних тенденций в мире недвижимости.</div>
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
            <div class="section-title _anim-items _anim-no-hide">Участники<br><span class="accentcolor">выставки</span></div>
            <div class="participants-description">
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">Лучшие компании</div>
                </div>
                <div class="participants-description-item__text">Компании участники проходят двухэтапный отбор по многим критериям</div>
              </div>
              <div class="participants-description-item">
                <div class="participants-description-title-wrapper">
                  <div class="participants-description-item__image">
                    <img src="/img/logo-fragment.svg" alt="">
                  </div>
                  <div class="participants-description-item__title">Эксклюзивные проекты</div>
                </div>
                <div class="participants-description-item__text">Самые уникальные проекты со всего мира в одном месте</div>
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
                  <div class="participants-counters-item__text">участников на выставке</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">15</div>
                  <div class="participants-counters-item__text">стран, принимают участие</div>
                </div>
              </div>
              <div class="participants-counters-item">
                <div class="participants-counters-item__image">
                  <img src="/img/logo-fragment.svg" alt="">
                </div>
                <div class="participants-counters-content">
                  <div class="participants-counters-item__title">5400+</div>
                  <div class="participants-counters-item__text">проектов на выставке</div>
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
              <div class="participants-item-content__text">Элитный застройщик Дубай со своими 6 новыми проектами</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg1.png" alt="">
              </div>
              <!-- <div class="participants-item-dark-bg"></div> -->
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">Whitewill</div>
              <div class="participants-item-content__text">ТОП-3 агенств недвижимости по версии Emaar, проекты Москва, Дубай, Лондон, Майами</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg2.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">OXO Construction</div>
              <div class="participants-item-content__text">Элитный застройщик делюкс проектов в солнечной Алании</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg3.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">KONAK Construction</div>
              <div class="participants-item-content__text">Премиальные проекты в Турции, основана с 1987 года</div>
              <div class="participants-item-content__bg">
                <img src="/img/participants-bg4.png" alt="">
              </div>
            </div>
          </div>
          <div class="participants-item">
            <div class="participants-item-content">
              <div class="participants-item-content__title">PRIME PROPERTY</div>
              <div class="participants-item-content__text">Элитный застройщик северного Кипра, более 237 проектов</div>
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
              <div class="participants-item-content__description">Здесь предоставлены постоянные участники наших мероприятий. Для того, чтобы посмотреть всех участников, перейдите по ссылке ниже.</div>
              <div class="participants-item-content__see-all">
                <a href="#">Смотреть всех участников</a>
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
              <div class="labels-item__title">Заполните<br>форму</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-get.svg" alt="">
              </div>
              <div class="labels-item__title">Получите электронный<br>билет</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="labels-item">
              <div class="labels-item__image">
                <img src="/img/ticket-label-show.svg" alt="">
              </div>
              <div class="labels-item__title">Покажите билет при<br>входе на выставку<br><span class="accent">28-29 октября</span></div>
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
          <div class="ticket-title">Недвижимость за рубежом<br><span class="accent">премиум и бизнес-класса</span></div>
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
              <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен<br> и согласен с <a href="/tr/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
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