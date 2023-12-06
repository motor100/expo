<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('robots')
  <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}" type="image/x-icon">
  <title>@yield('title', config('app.name') )</title>
  @yield('style')
  @vite(['resources/sass/main-tr.scss'])
</head>

<body>
  
  <!-- @include('preloader') -->

  <header class="header">
    <div class="header-top">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2 col-2">
            <div class="name hidden-mobile">Uluslararası sergiler</div>
            <div class="logo-mobile hidden-desktop">
              <img src="/img/logo-mobile.svg" alt="">
            </div>
          </div>
          <div class="col-md-9 col-8">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="city-mobile hidden-desktop">Moskova</div>
              <div class="cities-menu hidden-mobile">
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Moskova</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">St.Petersburg</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Dubai</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Antalya</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Alanya</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Limassol</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Bakü</a>
                </div>
              </div>
              <div class="city-mobile-dropdown hidden-desktop">
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Moskova</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">St.Petersburg</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Dubai</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Antalya</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Alanya</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Limassol</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/event">Bakü</a>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select hidden-mobile">
              <div class="lang-select-text">
                <a href="/tr" class="lang-select-link">tr</a>
              </div>
              <div class="lang-select-dropdown">
                <a href="/" class="lang-select-link">ru</a>
                <a href="/en" class="lang-select-link">en</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="underline-wrapper">
      <div class="container-xl">
        <div class="underline"></div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2 col-6">
            <div class="logo hidden-mobile">
              <a href="/tr">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
            <div class="name hidden-desktop">Uluslararası sergiler</div>
          </div>
          <div class="col-md-8 d-md-block d-none">
            <div class="top-menu hidden-mobile">
              <ul class="menu">
                <li class="menu-item">
                  <a href="/tr" class="menu-item-link">Ana</a>
                </li>
                <li class="menu-item">
                  <a href="/tr/for-participants" class="menu-item-link">Indeks</a>
                </li>
                <li class="menu-item">
                  <a href="/tr/poster" class="menu-item-link">Afiş</a>
                </li>
                <li class="menu-item">
                  <a href="/tr/participants" class="menu-item-link">Katılım</a>
                </li>
                <li class="menu-item">
                  <a href="/tr/contacts" class="menu-item-link">Iletişim</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="phone-wrapper">
              <div class="phone-img">
                <img src="/img/header-phone.svg" alt="">
              </div>
              <div class="phone-text">
                <a href="tel:+78002700700">8 800 2700 700</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
  </header>

  <div class="content-wrapper">

    @yield('content')

  </div>

  <footer class="footer">
    <div class="container-xl">
      <div class="footer-logo">
        <img src="/img/footer-logo.svg" alt="">
      </div>

      <div class="footer-contacts-mobile">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="contacts">
              <div class="phone">
                <a href="tel:+78002700700">8 800 2700 700</a>
              </div>
              <div class="email">
                <a href="mailto:support@luxpropertyexpo.com">support@luxpropertyexpo.com</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-5">
            <div class="address-wrapper">
              <div class="address">Moskova, Stolyarny Yoluк</div>
              <div class="working-time">08:00 - 20:00 saatleri arasında çalışıyoruz</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="socials">
              <a href="/tr/#" class="social-item">
                <img src="/img/footer-telegram.svg" alt="">
              </a>
              <a href="/tr/#" class="social-item">
                <img src="/img/footer-whatsapp.svg" alt="">
              </a>
              <a href="/tr/#" class="social-item">
                <img src="/img/footer-facebook.svg" alt="">
              </a>
              <a href="/tr/#" class="social-item">
                <img src="/img/footer-youtube.svg" alt="">
              </a>
              <a href="/tr/#" class="social-item">
                <img src="/img/footer-twitter.svg" alt="">
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="footer-menu">
        <div class="footer-menu-contacts">
          <div class="phone">
            <a href="tel:+78002700700">8 800 2700 700</a>
          </div>
          <div class="email">
            <a href="mailto:support@luxpropertyexpo.com">support@luxpropertyexpo.com</a>
          </div>
          <div class="address">Moskova, Stolyarny Yolu</div>
          <div class="working-time">08:00 - 20:00 saatleri arasında çalışıyoruz</div>
          <div class="socials">
            <a href="/tr/#" class="social-item">
              <img src="/img/footer-telegram.svg" alt="">
            </a>
            <a href="/tr/#" class="social-item">
              <img src="/img/footer-whatsapp.svg" alt="">
            </a>
            <a href="/tr/#" class="social-item">
              <img src="/img/footer-facebook.svg" alt="">
            </a>
            <a href="/tr/#" class="social-item">
              <img src="/img/footer-youtube.svg" alt="">
            </a>
            <a href="/tr/#" class="social-item">
              <img src="/img/footer-twitter.svg" alt="">
            </a>
          </div>
        </div>
        <div class="footer-menu-item for-participant">
          <div class="footer-menu-item__title">Katılımcılar için</div>
          <div class="nav">
            <a href="/tr/#description-section" class="nav-item">Lüks Mülkiyet Fuarı nedir</a>
            <a href="/tr/participants#projects-section" class="nav-item">Projeler & Ülkeler</a>
            <a href="/tr/#advantages-section" class="nav-item">Fuarın avantajları</a>
            <a href="/tr/participants#participants-section" class="nav-item">Katılımcı</a>
          </div>
        </div>
        <div class="footer-menu-item for-expo">
          <div class="footer-menu-item__title">Katılımcılar için</div>
          <div class="nav">
            <a href="/tr/#description-section" class="nav-item">Lüks Lüks Emlak Fuarı</a>
            <a href="/tr/participants#participants-section" class="nav-item">Katılımcı</a>
            <a href="/tr/for-participants#advertising-section" class="nav-item">Reklam Kampanyası</a>
            <a href="/tr/for-participants" class="nav-item">Katılımcı olun</a>
          </div>
        </div>
        <div class="footer-menu-item events">
          <div class="footer-menu-item__title">Poster</div>
          <div class="nav">
            <a href="/tr/event" class="nav-item">Moskova</a>
            <a href="/tr/event" class="nav-item">Antalya</a>
            <a href="/tr/event" class="nav-item">Dubai</a>
            <a href="/tr/event" class="nav-item">Limasol</a>
            <a href="/tr/event" class="nav-item">Bakü</a>
            <a href="/tr/event" class="nav-item">St. Petersburg</a>
          </div>
        </div>
        <div class="footer-menu-item info">
          <div class="footer-menu-item__title">Bilgi</div>
          <div class="nav">
            <a href="/tr/halal" class="nav-item">Ayrıntılı olarak helal</a>
            <a href="/tr/#partners-section" class="nav-item">İş Ortaklarımız</a>
            <a href="/tr/faq" class="nav-item">Sıkça Sorulan Sorular</a>
            <a href="/tr/#" class="nav-item">Kişisel hesap</a>
            <a href="/tr/contacts" class="nav-item">Kişiler</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-lg-3">
            <div class="footer-bottom-item copyright">© 2023 SA ORGANIZATION GROUP</div>
          </div>
          <div class="col-lg-6">
            <div class="footer-bottom-item privacy-policy">
              <a href="/tr/privacy-policy">Gizlilik Politikası</a>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
  </footer>

  <div class="burger-menu-wrapper">
    <div class="burger-menu">
      <span class="span"></span>
    </div>
  </div>

  <div class="mobile-menu">

    <ul class="menu">
      <li class="menu-item">
        <a href="/tr">Ana</a>
      </li>
      <li class="menu-item">
        <a href="/tr/for-participants">Indeks</a>
      </li>
      <li class="menu-item">
        <a href="/tr/poster">Afiş</a>
      </li>
      <li class="menu-item">
        <a href="/tr/participants">Katılım</a>
      </li>
      <li class="menu-item">
        <a href="/tr/contacts">Iletişim</a>
      </li>
    </ul>

  </div>

  <div id="callback-modal" class="modal-window callback-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="container-xl">
          <div class="modal-close-wrapper">
            <div class="modal-close">
              <div class="close"></div>
            </div>
          </div>
        </div>
        
        <div class="labels">
          <div class="container-xl">
            <div class="row">
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-form.svg" alt="">
                  </div>
                  <div class="labels-item__title">Оставьте заявку на<br> участие в выставке</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-get.svg" alt="">
                  </div>
                  <div class="labels-item__title">С вами свяжется VIP-<br>менеджер и расскажет про условия участия</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-show.svg" alt="">
                  </div>
                  <div class="labels-item__title">Подпишем документы и<br> начнем готовить ваш<br> стенд к выставке</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ticket-wrapper">
          <div class="container-xl">
            <div class="ticket">
              <div class="ticket-text-string">sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı</div>
              <div class="ticket-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="ticket-title">HEMEN TALEP BIRAKIN VE SERGİ <br><span class="accent">KATILIMCISI OLUN</span></div>
              <div class="ticket-right-text ticket-seats-counter">SADECE SOL<br><span class="accent">50 YERDEN <span class="accentcolor">17'Sİ</span></span></div>
              <form class="form callback-form">
                <div class="flex-container">
                  <input type="text" name="name" id="modal-ticket-name" class="input-field" required placeholder="Kendinizi tanıtın">
                  <input type="text" name="phone" id="modal-ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
                  <input type="email" name="email" id="modal-ticket-email" class="input-field" required placeholder="Email">
                  <button type="button" class="callback-submit-btn primary-btn">GÖNDERMEK</button>
                </div>
                <div class="checkbox-wrapper">
                  <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="modal-ticket-checkbox" checked required>
                  <label for="modal-ticket-checkbox" class="custom-checkbox-label"></label>
                  <span class="checkbox-text"><a href="/privacy-policy" class="privacy-policy-link" target="_blank">Kullanıcı sözleşmesini kabul ediyorum ve bu sitenin gizlilik politikasını okuyup <br> kabul ettiğimi onaylıyorum.</a></span>
                </div>
              </form>
              <div class="ticket-label">
                <img src="/img/ticket-label-desktop.png" class="ticket-label-image" alt="">
                <span class="ticket-label-text">elektronik bilet</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<!-- 
  @ if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Этот сайт использует cookie-файлы и другие технологии для улучшения его работы. Продолжая работу с сайтом, вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего браузера.</div>
        <button class="primary-btn btn-195 we-use-cookie-close">ХОРОШО</button>
      </div>
    </div>
  @ endif

  <div class="fixed-bottom-menu">
    <div class="menu-wrapper">
      <div class="menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-house.svg" alt="">
        </div>
        <div class="menu-item__title">Главная</div>
        <a href="/" class="full-link"></a>
      </div>
      <div class="menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-rectangle.svg" alt="">
        </div>
        <div class="menu-item__title">Каталог</div>
        <a href="/catalog" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-cart.svg" alt="">
        </div>
        <div class="menu-item__title">Корзина</div>
        <div id="mobile-cart-counter" class="badge-counter {{ isset($cart_count) ? 'active' : '' }}">{{ isset($cart_count) ? $cart_count : '' }}</div>
        <a href="/cart" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-heart.svg" alt="">
        </div>
        <div class="menu-item__title">Избранное</div>
        <div id="mobile-favourites-counter" class="badge-counter {{ isset($favourites_count) ? 'active' : '' }}">{{ isset($favourites_count) ? $favourites_count : '' }}</div>
        <a href="/favourites" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <div class="menu-item__image">
          <img src="/img/fixed-bottom-menu-chart.svg" alt="">
        </div>
        <div class="menu-item__title">Сравнение</div>
        <div id="mobile-comparison-counter" class="badge-counter {{ isset($comparison_count) ? 'active' : '' }}">{{ isset($comparison_count) ? $comparison_count : '' }}</div>
        <a href="/comparison" class="full-link"></a>
      </div>
    </div>
  </div>

  @ if(Auth::guard('admin')->user())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/admin">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <form class="form" action="{{-- route('admin.logout') --}}" method="POST">
              @csrf
              <button class="logout-btn" type="submit">Выйти</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @ endif
 -->

  @yield('script')
  @vite(['resources/js/main.js'])

</body>
</html>
