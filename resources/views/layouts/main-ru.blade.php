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
  @vite(['resources/sass/main-ru.scss'])
</head>

<body>
  
  @include('preloader')

  <header class="header">
    <div class="header-top">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2 col-2">
            <div class="name hidden-mobile">Международная выставка</div>
            <div class="logo-mobile hidden-desktop">
              <img src="/img/logo-mobile.svg" alt="">
            </div>
          </div>
          <div class="col-md-9 col-8">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="city-mobile hidden-desktop">Москва</div>
              <div class="cities-menu hidden-mobile">
                <div class="cities-menu-item">
                  <a href="/moscow" class="cities-menu-item__link">Москва</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/saint-petersburg" class="cities-menu-item__link">Санкт-Петербург</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/dubai" class="cities-menu-item__link">Дубай</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/antalya" class="cities-menu-item__link">Анталья</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/alanya" class="cities-menu-item__link">Алания</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/northern-cyprus" class="cities-menu-item__link">Северный Кипр</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/baku" class="cities-menu-item__link">Баку</a>
                </div>
              </div>
              <div class="city-mobile-dropdown hidden-desktop">
                <div class="city-mobile-dropdown-item">
                  <a href="/moscow">Москва</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/saint-petersburg">Санкт-Петербург</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/dubai">Дубай</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/antalya">Анталья</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/alanya">Алания</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/northern-cyprus">Северный Кипр</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/baku">Баку</a>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select hidden-mobile">
              <div class="lang-select-text">
                <a href="/" class="lang-select-link">ru</a>
              </div>
              <div class="lang-select-dropdown">
                <a href="/en" class="lang-select-link">en</a>
                <a href="/tr" class="lang-select-link">tr</a>
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
              <a href="/">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
            <div class="name hidden-desktop">Международная выставка</div>
          </div>
          <div class="col-md-8 d-md-block d-none">
            <div class="top-menu hidden-mobile">
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
          <div class="col-md-2 col-6">
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
    <div class="container-xl">
      <div class="footer-logo">
        <img src="/img/footer-logo.svg" alt="">
      </div>

      <div class="footer-contacts-mobile">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="contacts">
              <div class="phone">{{ $contacts->phone }}</div>
              <div class="email">
                <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-5">
            <div class="address-wrapper">
              <div class="address">{{ $contacts->address_ru }}</div>
              <div class="working-time">Мы работаем {{ $contacts->time }}</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="socials">
              <a href="#" class="social-item">
                <img src="/img/footer-telegram.svg" alt="">
              </a>
              <a href="#" class="social-item">
                <img src="/img/footer-whatsapp.svg" alt="">
              </a>
              <a href="#" class="social-item">
                <img src="/img/footer-facebook.svg" alt="">
              </a>
              <a href="#" class="social-item">
                <img src="/img/footer-youtube.svg" alt="">
              </a>
              <a href="#" class="social-item">
                <img src="/img/footer-twitter.svg" alt="">
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="footer-menu">
        <div class="footer-menu-contacts">
          <div class="phone">{{ $contacts->phone }}</div>
          <div class="email">
            <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
          </div>
          <div class="address">Москва, Столярный переулок</div>
          <div class="working-time">Мы работаем {{ $contacts->time }}</div>
          <div class="socials">
            <a href="#" class="social-item">
              <img src="/img/footer-telegram.svg" alt="">
            </a>
            <a href="#" class="social-item">
              <img src="/img/footer-whatsapp.svg" alt="">
            </a>
            <a href="#" class="social-item">
              <img src="/img/footer-facebook.svg" alt="">
            </a>
            <a href="#" class="social-item">
              <img src="/img/footer-youtube.svg" alt="">
            </a>
            <a href="#" class="social-item">
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
            <a href="/moscow" class="nav-item">Москва</a>
            <a href="/antalya" class="nav-item">Анталья</a>
            <a href="/dubai" class="nav-item">Дубай</a>
            <a href="/northern-cyprus" class="nav-item">Северный Кипр</a>
            <a href="/baku" class="nav-item">Баку</a>
            <a href="/saint-petersburg" class="nav-item">Санкт-Петербург</a>
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
          <div class="col-lg-3">
            <div class="footer-bottom-item copyright">© 2023 SA ORGANIZATION GROUP</div>
          </div>
          <div class="col-lg-6">
            <div class="footer-bottom-item privacy-policy">
              <a href="/privacy-policy">Политика конфиденциальности</a>
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

    <div class="logo">
      <img src="/img/mobile-menu-logo.svg" alt="">
    </div>

    <ul class="menu">
      <li class="menu-item">
        <a href="/">Главная</a>
      </li>
      <li class="menu-item">
        <a href="/for-participants">Экспонентам</a>
      </li>
      <li class="menu-item">
        <a href="/poster">Афиша</a>
      </li>
      <li class="menu-item">
        <a href="/participants">Участники</a>
      </li>
      <li class="menu-item">
        <a href="/contacts">Контакты</a>
      </li>
    </ul>

    <div class="phone-wrapper">
      <div class="phone-img">
        <img src="/img/header-phone.svg" alt="">
      </div>
      <div class="phone-text">{{ $contacts->phone }}</div>
    </div>

    <div class="socials">
      <a href="#" class="social-item">
        <img src="/img/footer-telegram.svg" alt="">
      </a>
      <a href="#" class="social-item">
        <img src="/img/footer-whatsapp.svg" alt="">
      </a>
      <a href="#" class="social-item">
        <img src="/img/footer-facebook.svg" alt="">
      </a>
      <a href="#" class="social-item">
        <img src="/img/footer-youtube.svg" alt="">
      </a>
      <a href="#" class="social-item">
        <img src="/img/footer-twitter.svg" alt="">
      </a>
    </div>

    <div class="lang-select">
      <a href="/" class="lang-select-link active">RU</a>
      <a href="/en" class="lang-select-link">EN</a>
      <a href="/tr" class="lang-select-link">TR</a>
    </div>

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
              <div class="ticket-text-string">выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция&nbsp;&nbsp;&nbsp;выставка конференция</div>
              <div class="ticket-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="ticket-title">ОСТАВЬ ЗАЯВКУ ПРЯМО СЕЙЧАС И <br><span class="accent">СТАНЬ УЧАСТНИКОМ ВЫСТАВКИ</span></div>
              <form class="form callback-form">
                <div class="flex-container">
                  <input type="text" name="name" id="modal-ticket-name" class="input-field" required placeholder="Представьтесь">
                  <input type="text" name="phone" id="modal-ticket-phone" class="input-field js-input-phone-mask" required placeholder="Телефон">
                  <input type="email" name="email" id="modal-ticket-email" class="input-field" required placeholder="Email">
                  <button type="button" class="callback-submit-btn primary-btn">ПОЛУЧИТЬ</button>
                </div>
                <div class="checkbox-wrapper">
                  <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="modal-ticket-checkbox" checked required>
                  <label for="modal-ticket-checkbox" class="custom-checkbox-label"></label>
                  <span class="checkbox-text">Я принимаю пользовательское соглашение и подтверждаю, что ознакомлен<br> и согласен с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a> данного сайта.</span>
                </div>
              </form>
              <div class="ticket-counter">Осталось всего<br><span class="accentcolor">17</span> из 50 мест</span></div>
              <div class="ticket-label">
                <img src="/img/ticket-label-desktop.png" class="ticket-label-image" alt="">
                <span class="ticket-label-text">электронный билет</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  @if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Этот сайт использует cookies, не пугайтесь.</div>
        <button class="we-use-cookie-close">ОК</button>
      </div>
    </div>
  @endif

  @if(auth()->user())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/dashboard">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <form class="form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="logout-btn" type="submit">Выйти</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endif

  @yield('script')
  @vite(['resources/js/main.js'])

</body>
</html>
