<!DOCTYPE html>
<html lang="ru">
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
  @vite(['resources/sass/main.scss'])
</head>

<body>

  <div class="preloader">
    <div class="preloader-image">
      <img src="/img/loader.gif" alt="">
    </div>
  </div>

  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="name">Международная выставка</div>
          </div>
          <div class="col-md-9">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="cities-menu">
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Москва</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Санкт-Петербург</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Дубай</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Анталья</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Алания</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Лимассол</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/event" class="cities-menu-item__link">Баку</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select">
              <div class="lang-select-text">
              <a href="/">ru</a>
            </div>
              <div class="lang-select-text">
              <a href="/en">en</a>
            </div>
              <div class="lang-select-text">
              <a href="/tr">tr</a>
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
              <a href="/">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="top-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a href="/" class="menu-item-link">Главная</a>
                </li>
                <li class="menu-item">
                  <a href="/for-participants" class="menu-item-link">Экспонентам</a>
                </li>
                <li class="menu-item">
                  <a href="/poster" class="menu-item-link">Афиша</a>
                </li>
                <li class="menu-item">
                  <a href="/participants" class="menu-item-link">Участники</a>
                </li>
                <li class="menu-item">
                  <a href="/contacts" class="menu-item-link">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
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
    <div class="container">
      <div class="footer-logo">
        <img src="/img/footer-logo.svg" alt="">
      </div>
      <div class="footer-menu">
        <div class="footer-menu-contacts">
          <div class="phone">
            <a href="tel:+78002700700">8 800 2700 700</a>
          </div>
          <div class="email">
            <a href="mailto:support@luxpropertyexpo.com">support@luxpropertyexpo.com</a>
          </div>
          <div class="address">Москва, Столярный переулок</div>
          <div class="working-time">Мы работаем с 08:00 до 20:00</div>
          <div class="socials">
            <a href="" class="social-item">
              <img src="/img/footer-telegram.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-whatsapp.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-facebook.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-youtube.svg" alt="">
            </a>
            <a href="" class="social-item">
              <img src="/img/footer-twitter.svg" alt="">
            </a>
          </div>
        </div>
        <div class="footer-menu-item for-participant">
          <div class="footer-menu-item__title">Для участников</div>
          <div class="nav">
            <a href="/#description-section" class="nav-item">Что такое Luxury Property Expo</a>
            <a href="/participants#projects-section" class="nav-item">Проекты и страны</a>
            <a href="/#advantages-section" class="nav-item">Преимущества выставки</a>
            <a href="/participants#participants-section" class="nav-item">Участники</a>
          </div>
        </div>
        <div class="footer-menu-item for-expo">
          <div class="footer-menu-item__title">Для экспонентов</div>
          <div class="nav">
            <a href="/#description-section" class="nav-item">Что такое Luxury Property Expo</a>
            <a href="/participants#participants-section" class="nav-item">Участники</a>
            <a href="/for-participants#advertising-section" class="nav-item">Рекламная кампания</a>
            <a href="/for-participants" class="nav-item">Стать экспонентом</a>
          </div>
        </div>
        <div class="footer-menu-item events">
          <div class="footer-menu-item__title">Афиша</div>
          <div class="nav">
            <a href="/event" class="nav-item">Москва</a>
            <a href="/event" class="nav-item">Анталия</a>
            <a href="/event" class="nav-item">Дубай</a>
            <a href="/event" class="nav-item">Лимассол</a>
            <a href="/event" class="nav-item">Баку</a>
            <a href="/event" class="nav-item">Санкт-Петербург</a>
          </div>
        </div>
        <div class="footer-menu-item info">
          <div class="footer-menu-item__title">Информация</div>
          <div class="nav">
            <a href="/halal" class="nav-item">Халяль подробно</a>
            <a href="/#partners-section" class="nav-item">Наши партнеры</a>
            <a href="/faq" class="nav-item">Частые вопросы</a>
            <a href="#" class="nav-item">Личный кабинет</a>
            <a href="/contacts" class="nav-item">Контакты</a>
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
              <a href="/privacy-policy">Политика конфиденциальности</a>
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
      <li class="menu-item {{ Route::is('company') ? 'active' : '' }}">
        <a href="/company">КОМПАНИЯ</a>
      </li>
      <li class="menu-item {{ Route::is('services') ? 'active' : '' }}">
        <a href="/services">УСЛУГИ</a>
      </li>
      <li class="menu-item {{ Route::is('payment') ? 'active' : '' }}">
        <a href="/payment">ОПЛАТА</a>
      </li>
      <li class="menu-item {{ Route::is('delivery') ? 'active' : '' }}">
        <a href="/delivery">ДОСТАВКА</a>
      </li>
      <li class="menu-item {{ Route::is('warranty') ? 'active' : '' }}">
        <a href="/warranty">ГАРАНТИЯ</a>
      </li>
      <li class="menu-item {{ Route::is('calculators') ? 'active' : '' }}">
        <a href="/calculators">КАЛЬКУЛЯТОРЫ</a>
      </li>
      <li class="menu-item">
        <a href="/contacts {{ Route::is('contacts') ? 'active' : '' }}">КОНТАКТЫ</a>
      </li>
    </ul>

    <div class="secondary-btn callback-btn js-callback-btn">Оставить заявку</div>

    <div class="info">
      <div class="phone">+7 (982) 292-88-79</div>
      <div class="phone">8 (800) 575-55-88</div>
    </div>          

  </div>

  <div id="callback-modal" class="modal-window callback-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="container">
          <div class="modal-close-wrapper">
            <div class="modal-close">
              <div class="close"></div>
            </div>
          </div>
        </div>
        
        @include('ticket')
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
