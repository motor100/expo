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
  
  @include('preloader')

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
                  <a href="/tr/moscow" class="cities-menu-item__link">Moskova</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/saint-petersburg" class="cities-menu-item__link">St.Petersburg</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/dubai" class="cities-menu-item__link">Dubai</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/antalya" class="cities-menu-item__link">Antalya</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/alanya" class="cities-menu-item__link">Alanya</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/northern-cyprus" class="cities-menu-item__link">Northern Cyprus</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/tr/baku" class="cities-menu-item__link">Bakü</a>
                </div>
              </div>
              <div class="city-mobile-dropdown hidden-desktop">
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/moscow">Moskova</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/saint-petersburg">St.Petersburg</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/dubai">Dubai</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/antalya">Antalya</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/alanya">Alanya</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/northern-cyprus">Northern Cyprus</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/tr/baku">Bakü</a>
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
              <div class="address">{{ $contacts->address_tr }}</div>
              <div class="working-time">{{ $contacts->time }} saatleri arasında çalışıyoruz</div>
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
            <a href="/tr/moscow" class="nav-item">Moskova</a>
            <a href="/tr/antalya" class="nav-item">Antalya</a>
            <a href="/tr/dubai" class="nav-item">Dubai</a>
            <a href="/tr/northern-cyprus" class="nav-item">Northern Cyprus</a>
            <a href="/tr/baku" class="nav-item">Bakü</a>
            <a href="/tr/saint-petersburg" class="nav-item">St. Petersburg</a>
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

    <div class="logo">
      <img src="/img/mobile-menu-logo.svg" alt="">
    </div>

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
      <a href="/" class="lang-select-link">RU</a>
      <a href="/en" class="lang-select-link">EN</a>
      <a href="/tr" class="lang-select-link active">TR</a>
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
                  <div class="labels-item__title">Formu doldur</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-get.svg" alt="">
                  </div>
                  <div class="labels-item__title">Bir e-bilet alın</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-show.svg" alt="">
                  </div>
                  <div class="labels-item__title"><span class="accentcolor">28-29</span> Ekim tarihlerinde sergi girişinde biletinizi gösterin</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ticket-wrapper">
          <div class="container-xl">
            <div class="ticket">
              <div class="ticket-text-string">sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı&nbsp;&nbsp;&nbsp;sergi konferansı</div>
              <div class="ticket-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="ticket-title">HEMEN TALEP BIRAKIN VE SERGİ <br><span class="accent">KATILIMCISI OLUN</span></div>
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
              <div class="ticket-counter">SADECE SOL<br><span class="accent">50 YERDEN <span class="accentcolor">17'Sİ</span></span></div>
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

  @if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Bu site çerezleri kullanıyor, korkmayın.</div>
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
