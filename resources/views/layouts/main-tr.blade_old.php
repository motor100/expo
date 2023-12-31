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
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="name">Uluslararası sergiler</div>
          </div>
          <div class="col-md-9">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="cities-menu">
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
                  <a href="/tr/event" class="cities-menu-item__link">Northern Cyprus</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/event" class="cities-menu-item__link">Bakü</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select">
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
      <div class="container">
        <div class="underline"></div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="logo">
              <a href="/tr">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="top-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a href="/tr/" class="menu-item-link">Ana</a>
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
          <div class="col-md-2">
            <div class="phone-wrapper">
              <div class="phone-img">
                <img src="/img/header-phone.svg" alt="">
              </div>
              <div class="phone-text">{{ $contacts->phone }}</div>
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
    <div class="container">
      <div class="footer-logo">
        <img src="/img/footer-logo.svg" alt="">
      </div>
      <div class="footer-menu">
        <div class="footer-menu-contacts">
          <div class="phone">{{ $contacts->phone }}</div>
          <div class="email">
            <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
          </div>
          <div class="address">{{ $contacts->address_tr }}</div>
          <div class="working-time">{{ $contacts->time }} saatleri arasında çalışıyoruz</div>
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
            <a href="/tr/event" class="nav-item">Northern Cyprus</a>
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
          <div class="col-md-3">
            <div class="copyright">© 2023 SA ORGANIZATION GROUP</div>
          </div>
          <div class="col-md-6">
            <div class="privacy-policy">
              <a href="/tr/privacy-policy">Gizlilik Politikası</a>
            </div>
          </div>
          <div class="col-md-3"></div>
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
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Оставить заявку</div>
        <form id="callback-modal-form" class="form" method="post">
          <div class="form-group">
            <label for="name-callback-modal" class="label">Имя <span class="accentcolor">*</span></label>
            <input type="text" name="name" id="name-callback-modal" class="input-field js-name-callback-modal" required minlength="3" maxlength="20">
          </div>
          <div class="form-group">
            <label for="email-callback-modal" class="label">E-mail <span class="accentcolor">*</span></label>
            <input type="email" name="email" id="email-callback-modal" class="input-field js-email-callback-modal" required minlength="3" maxlength="50">
          </div>
          <div class="form-group">
            <label for="phone-callback-modal" class="label">Телефон <span class="accentcolor">*</span></label>
            <input type="text" name="phone" id="phone-callback-modal" class="input-field js-phone-callback-modal js-input-phone-mask" required size="18">
          </div>
          <div class="form-group">
            <label for="message-callback-modal" class="label">Сообщение</label>
            <textarea name="message" id="message-callback-modal" class="input-field textarea" minlength="3" maxlength="100"></textarea>
          </div>
          <div class="checkbox-wrapper">
            <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-agree-callback-modal" checked required>
            <label for="checkbox-agree-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Согласен на обработку персональных данных</span>
          </div>
          <div class="checkbox-wrapper mb25">
            <input type="checkbox" name="checkbox-read" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-read-callback-modal" checked required>
            <label for="checkbox-read-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Ознакомлен с <a href="/tr/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
          </div>

          @csrf
          <button type="button" id="callback-submit-btn" class="primary-btn modal-submit-btn btn-415">ОТПРАВИТЬ СООБЩЕНИЕ</button>
        </form>
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
