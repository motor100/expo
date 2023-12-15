<!DOCTYPE html>
<html lang="en">
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
  @vite(['resources/sass/main-en.scss'])
</head>

<body>
  
  @include('preloader')

  <header class="header">
    <div class="header-top">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-2 col-2">
            <div class="name hidden-mobile">International exhibitions</div>
            <div class="logo-mobile hidden-desktop">
              <img src="/img/logo-mobile.svg" alt="">
            </div>
          </div>
          <div class="col-md-9 col-8">
            <div class="cities-menu-wrapper">
              <div class="cursor">
                <img src="/img/header-cursor.svg" alt="">
              </div>
              <div class="city-mobile hidden-desktop">Moscow</div>
              <div class="cities-menu hidden-mobile">
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Moscow</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">St. Petersburg</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Dubai</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Antalya</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Alania</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Limassol</a>
                </div>
                <div class="cities-menu-item">
                  <a href="/en/event" class="cities-menu-item__link">Baku</a>
                </div>
              </div>
              <div class="city-mobile-dropdown hidden-desktop">
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Moscow</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">St. Petersburg</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Dubai</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Antalya</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Alania</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Limassol</a>
                </div>
                <div class="city-mobile-dropdown-item">
                  <a href="/en/event">Baku</a>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-1">
            <div class="lang-select hidden-mobile">
              <div class="lang-select-text">
                <a href="/en" class="lang-select-link">en</a>
              </div>
              <div class="lang-select-dropdown">
                <a href="/ru" class="lang-select-link">ru</a>
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
              <a href="/en">
                <img src="/img/logo.svg" alt="">
              </a>
            </div>
            <div class="name hidden-desktop">International exhibitions</div>
          </div>
          <div class="col-md-8 d-md-block d-none">
            <div class="top-menu hidden-mobile">
              <ul class="menu">
                <li class="menu-item">
                  <a href="/en" class="menu-item-link">Main</a>
                </li>
                <li class="menu-item">
                  <a href="/en/for-participants" class="menu-item-link">Index</a>
                </li>
                <li class="menu-item">
                  <a href="/en/poster" class="menu-item-link">Poster</a>
                </li>
                <li class="menu-item">
                  <a href="/en/participants" class="menu-item-link">Attendance</a>
                </li>
                <li class="menu-item">
                  <a href="/en/contacts" class="menu-item-link">Contacts</a>
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
              <div class="address">Moscow, Stolyarny Lane</div>
              <div class="working-time">We work from 08:00 to 20:00</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="socials">
              <a href="/en/#" class="social-item">
                <img src="/img/footer-telegram.svg" alt="">
              </a>
              <a href="/en/#" class="social-item">
                <img src="/img/footer-whatsapp.svg" alt="">
              </a>
              <a href="/en/#" class="social-item">
                <img src="/img/footer-facebook.svg" alt="">
              </a>
              <a href="/en/#" class="social-item">
                <img src="/img/footer-youtube.svg" alt="">
              </a>
              <a href="/en/#" class="social-item">
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
          <div class="address">Moscow, Stolyarny Lane</div>
          <div class="working-time">We work from 08:00 to 20:00</div>
          <div class="socials">
            <a href="/en/#" class="social-item">
              <img src="/img/footer-telegram.svg" alt="">
            </a>
            <a href="/en/#" class="social-item">
              <img src="/img/footer-whatsapp.svg" alt="">
            </a>
            <a href="/en/#" class="social-item">
              <img src="/img/footer-facebook.svg" alt="">
            </a>
            <a href="/en/#" class="social-item">
              <img src="/img/footer-youtube.svg" alt="">
            </a>
            <a href="/en/#" class="social-item">
              <img src="/img/footer-twitter.svg" alt="">
            </a>
          </div>
        </div>
        <div class="footer-menu-item for-participant">
          <div class="footer-menu-item__title">For participants</div>
          <div class="nav">
            <a href="/en/#description-section" class="nav-item">What is Luxury Property Expo</a>
            <a href="/en/participants#projects-section" class="nav-item">Projects & Countries</a>
            <a href="/en/#advantages-section" class="nav-item">Advantages of the exhibition</a>
            <a href="/en/participants#participants-section" class="nav-item">Participants</a>
          </div>
        </div>
        <div class="footer-menu-item for-expo">
          <div class="footer-menu-item__title">For Exhibitors</div>
          <div class="nav">
            <a href="/en/#description-section" class="nav-item">What is Luxury Property Expo</a>
            <a href="/en/participants#participants-section" class="nav-item">Participants</a>
            <a href="/en/for-participants#advertising-section" class="nav-item">Advertising Campaign</a>
            <a href="/en/for-participants" class="nav-item">Become an exhibitor</a>
          </div>
        </div>
        <div class="footer-menu-item events">
          <div class="footer-menu-item__title">Poster</div>
          <div class="nav">
            <a href="/en/event" class="nav-item">Moscow</a>
            <a href="/en/event" class="nav-item">Antalya</a>
            <a href="/en/event" class="nav-item">Dubai</a>
            <a href="/en/event" class="nav-item">Limassol</a>
            <a href="/en/event" class="nav-item">Baku</a>
            <a href="/en/event" class="nav-item">Saint Petersburg</a>
          </div>
        </div>
        <div class="footer-menu-item info">
          <div class="footer-menu-item__title">Information</div>
          <div class="nav">
            <a href="/en/halal" class="nav-item">Halal in detail</a>
            <a href="/en/#partners-section" class="nav-item">Our Partners</a>
            <a href="/en/faq" class="nav-item">Frequently Asked Questions</a>
            <a href="/en/#" class="nav-item">Personal account</a>
            <a href="/en/contacts" class="nav-item">Contacts</a>
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
              <a href="/en/privacy-policy">Privacy policy</a>
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
        <a href="/en">Main</a>
      </li>
      <li class="menu-item">
        <a href="/en/for-participants">Index</a>
      </li>
      <li class="menu-item">
        <a href="/en/poster">Poster</a>
      </li>
      <li class="menu-item">
        <a href="/en/participants">Attendance</a>
      </li>
      <li class="menu-item">
        <a href="/en/contacts">Contacts</a>
      </li>
    </ul>

    <div class="phone-wrapper">
      <div class="phone-img">
        <img src="/img/header-phone.svg" alt="">
      </div>
      <div class="phone-text">
        <a href="tel:+78002700700">8 800 2700 700</a>
      </div>
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
      <a href="/en" class="lang-select-link active">EN</a>
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
                  <div class="labels-item__title">Leave a request to participate in the exhibition</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-get.svg" alt="">
                  </div>
                  <div class="labels-item__title">A VIP manager will contact you and tell you about the conditions of participation</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="labels-item">
                  <div class="labels-item__image">
                    <img src="/img/ticket-label-show.svg" alt="">
                  </div>
                  <div class="labels-item__title">We will sign the documents and begin preparing your stand for the exhibition</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ticket-wrapper">
          <div class="container-xl">
            <div class="ticket">
              <div class="ticket-text-string">exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference&nbsp;&nbsp;&nbsp;exhibition conference</div>
              <div class="ticket-logo">
                <img src="/img/logo.svg" alt="">
              </div>
              <div class="ticket-title">LEAVE A REQUEST RIGHT NOW AND <br><span class="accent">BECOME A PARTICIPANT IN THE EXHIBITION</span></div>
              <form class="form callback-form">
                <div class="flex-container">
                  <input type="text" name="name" id="modal-ticket-name" class="input-field" required placeholder="Name">
                  <input type="text" name="phone" id="modal-ticket-phone" class="input-field js-input-phone-mask" required placeholder="Phone">
                  <input type="email" name="email" id="modal-ticket-email" class="input-field" required placeholder="Email">
                  <button type="button" class="callback-submit-btn primary-btn">SEND</button>
                </div>
                <div class="checkbox-wrapper">
                  <input type="checkbox" name="ticket-checkbox" class="custom-checkbox js-checkbox-callback-modal" id="modal-ticket-checkbox" checked required>
                  <label for="modal-ticket-checkbox" class="custom-checkbox-label"></label>
                  <span class="checkbox-text"><a href="/en/privacy-policy" class="privacy-policy-link" target="_blank">I accept the user agreement and confirm that I have read and agree to the <br> privacy policy of this site.</a></span>
                </div>
              </form>
              <div class="ticket-counter">Only left<br><span class="accent"><span class="accentcolor">17</span> of 50 places</span></div>
              <div class="ticket-label">
                <img src="/img/ticket-label-desktop.png" class="ticket-label-image" alt="">
                <span class="ticket-label-text">e-ticket</span>
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
        <div class="we-use-cookie-text">This site uses cookies, don't be scared.</div>
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
